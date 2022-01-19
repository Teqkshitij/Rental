<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Mailer\Mailer;
use Stripe;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaymentController extends AppController
{


    public function add($id)
    {
        $this->Status->isUser();
        $payment = $this->Payment->newEmptyEntity();
        $amount = $this->Payment->Users->findById($id)->firstOrFail()->package;
        // debug($this->Payment->Users->findById($id)->firstOrFail());die();
        // debug($this->request->getData());die();
        if ($this->request->is('post')) {
            $payment = $this->Payment->patchEntity($payment, $this->request->getData());
            // $payment->user_id = $id;
            $payment->amount = $this->Payment->Users->findById($id)->firstOrFail()->package;
            // debug($this->Payment->Users->findById($id)->firstOrFail()->package);die(); 
            if ($this->Payment->save($payment)) {
                $this->Flash->success(__('The payment is successful.'));

                return $this->redirect(['action' => 'congrats', $payment->user_id]);
            }
            $this->Flash->error(__('The payment could not be done. Please, try again.'));
        }
        $payment->amount = $amount;
        $this->set(compact('payment'));
    }

    public function congrats($id)
    {
        $this->Status->isUser();
        $email = $this->Payment->Users->findById($id)->contain(['Payment', 'Carinfo'])->firstOrFail();

        $message = "Dear " . $email->name . ",\n"
            . "Thank you for Booking. Your details are mentioned below:-\n"
            . "Name: " . $email->name . "\n"
            . "Car: " . $email->carinfo->car_name . "\n"
            . "Booking Date: " . $email->date . "\n"
            . "Booking Time: " . $email->time . "\n"
            . "Second Driver: " . $email->full_name . "\n"
            . "Email: " . $email->email . "\n"
            . "Contact Number:" . $email->contact . "\n"
            . "License Number: " . $email->license . "\n"
            . "Package: $" . $email->package . "\n"
            . "Country of Residence: " . $email->address . "\n"
            . "Breakdown Insurance: " . $email->insurance . "\n"
            . "Prepaid Gas Credit: " . $email->gas . "\n"
            . "Destination: " . $email->destination . "\n"
            . "Have a Safe and Memorable Ride.";

        $mailer = new Mailer();
        $mailer->setTransport('mail');
        $mailer->setFrom(['tqmassociate@gmail.com' => 'Royalty Exotic '])
            ->setTo($email->email)
            ->setSubject('Booking Confirmation for your rental car.')
            ->deliver($message);
    }




    // public function stripe()
    // {
    //     $this->set(compact('id'));
    //     $this->set("title", "Stripe Payment Gateway Integration");
    // }

    // public function payment()
    // {
        
    //     require_once VENDOR_PATH . '/stripe/stripe-php/init.php';

    //     Stripe\Stripe::setApiKey(STRIPE_SECRET);
    //     $stripe = Stripe\Charge::create([
    //         "amount" => $id,
    //         "currency" => "inr",
    //         "source" => $_REQUEST["stripeToken"],
    //         "description" => "Test payment via Stripe From onlinewebtutorblog.com"
    //     ]);
    //     // after successfull payment, you can store payment related information into your database
    //     $this->Flash->success(__('Payment done successfully'));

    //     return $this->redirect(['action' => 'congrats',  $payment->user_id]);
    // }
}
