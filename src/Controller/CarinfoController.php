<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Carinfo Controller
 *
 * @property \App\Model\Table\CarinfoTable $Carinfo
 * @method \App\Model\Entity\Carinfo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CarinfoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Status->isUser();

        $key=$this->request->getQuery('key');
        // exit($key);
    if($key){
        $query=$this->Carinfo->find('all')->where(['car_name like'=>'%'.$key.'%']);

    }
    else{
        $query=$this->Carinfo;
    }
        $carinfo = $this->paginate($query);

        $this->set(compact('carinfo'));
    }

    // public function search(){
    //     $this->request->allowMethod('ajax');

    //     $keyword =$this->request->query('keyword');

    //     $query= $this->Carinfo->find('all',[
    //         'conditions'=>['car_name LIKE'=>'%'.$keyword.'%'],

    //     ]);
    //     $this->set('carinfo', $this->paginate($query));
    //     $this->set('_serialize',['carinfo']);
    // }

    /**
     * View method
     *
     * @param string|null $id Carinfo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        
        $this->Status->isUser();
        $carinfo = $this->Carinfo->get($id);

        $this->set(compact('carinfo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->Status->isUser();
        $carinfo = $this->Carinfo->newEmptyEntity();
        if ($this->request->is('post')) {
            $carinfo = $this->Carinfo->patchEntity($carinfo, $this->request->getData());

            if(!$carinfo->getErrors){
                $image=$this->request->getData(('car_image'));
                $name=$image->getClientFilename();
                $path=WWW_ROOT.'img'.DS.$name;

                if($name)
                    $image->moveTo($path);
                $carinfo->car_image=$name;
            }
            if ($this->Carinfo->save($carinfo)) {
                $this->Flash->success(__('The carinfo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carinfo could not be saved. Please, try again.'));
        }
        $this->set(compact('carinfo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Carinfo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Status->isUser();
        $carinfo = $this->Carinfo->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carinfo = $this->Carinfo->patchEntity($carinfo, $this->request->getData());
            if ($this->Carinfo->save($carinfo)) {
                $this->Flash->success(__('The carinfo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carinfo could not be saved. Please, try again.'));
        }
        $this->set(compact('carinfo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Carinfo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->Status->isUser();
        $this->request->allowMethod(['post', 'delete']);
        $carinfo = $this->Carinfo->get($id);
        if ($this->Carinfo->delete($carinfo)) {
            $this->Flash->success(__('The carinfo has been deleted.'));
        } else {
            $this->Flash->error(__('The carinfo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
   
}
