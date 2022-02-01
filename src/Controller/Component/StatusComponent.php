<?php

namespace App\Controller\Component;

use Cake\Controller\Component;

class StatusComponent extends Component
{
    public function isAdmin()
    {
        $user = $this->getController()->getRequest()->getAttribute('identity')->user_type;
        if($user == 'admin') {
            return true;
        }else {
            $this->getController()->Flash->error(__('You Are Not Authorised To Visit That Page'));
            $this->getController()->redirect(['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'index']);
        }
    }


    public function isUser()
    {
        $user = $this->getController()->getRequest()->getAttribute('identity')->user_type;
        if($user == 'user') {
            return true;
        }else {
            $this->getController()->Flash->error(__('You Are Not Authorised To Visit That Page'));
            $this->getController()->redirect(['prefix' => false, 'controller' => 'Users', 'action' => 'index']);
        }
    }


     public function checkStatus()
    {
        $user = $this->getController()->getRequest()->getAttribute('identity');
        $prefix = $this->getController()->getRequest()->getParam('prefix');
        // debug($prefix);
        // die();
        if($user->status == 'inactive') {
            $this->getController()->Flash->error(__('User inactive..!!Cannot Login.'));
            return ['controller' => 'Carusers', 'action' => 'logout'];

            
        }else if($user->status == 'active') {
            if($user->user_type == 'admin') {
                if($prefix == 'Admin') {
                    return ['prefix' => 'Admin', 'controller' => 'Carinfo', 'action' => 'index'];
                }else {
                    $this->getController()->Flash->error(__('Admin Cannot Login.'));
                    return ['prefix' => false, 'controller' => 'Carusers', 'action' => 'index'];
                }
            }else if($user->user_type == 'user') {
                if($prefix == null) {
                    return ['prefix' => false, 'controller' => 'Carinfo', 'action' => 'index'];
                }else {
                    $this->getController()->Flash->error(__('User Cannot Login.'));
                    return ['prefix' => false, 'controller' => 'Carusers', 'action' => 'logout'];
                }
            }
        }
    }
}