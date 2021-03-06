<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Benutzer Controller
 *
 * @property \App\Model\Table\BenutzerTable $Benutzer
 *
 * @method \App\Model\Entity\Benutzer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BenutzerController extends AppController
{
    public function initialize(){
        parent::initialize();
        $this->Auth->allow(['start', 'add', 'about','index']);
        
    }

    public function about(){
        $this->viewBuilder()->setLayout(false);
        $this->viewBuilder()->setTemplate('about');
    }

    public function start(){
        $this->viewBuilder()->setTemplate('start');
    }

    public function login(){
        $this->viewBuilder()->setTemplate('login');
        $benutzer = $this->Benutzer->newEntity();
        $this->set('benutzer', $benutzer);

        if($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect(['action' => 'start']);
            }else{
                $this->Flash->error('Falsches Passwort');
            }
        }
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $benutzer = $this->paginate($this->Benutzer);

        $this->set(compact('benutzer'));
    }

    /**
     * View method
     *
     * @param string|null $id Benutzer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $benutzer = $this->Benutzer->get($id, [
            'contain' => []
        ]);

        $this->set('benutzer', $benutzer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add(){
        $benutzer = $this->Benutzer->newEntity();
        if ($this->request->is('post')) {
            $benutzer = $this->Benutzer->patchEntity($benutzer, $this->request->getData());
            if ($this->Benutzer->save($benutzer)) {
                $this->Flash->success(__('The benutzer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The benutzer could not be saved. Please, try again.'));
        }
        $this->set(compact('benutzer'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Benutzer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $benutzer = $this->Benutzer->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $benutzer = $this->Benutzer->patchEntity($benutzer, $this->request->getData());
            if ($this->Benutzer->save($benutzer)) {
                $this->Flash->success(__('The benutzer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The benutzer could not be saved. Please, try again.'));
        }
        $this->set(compact('benutzer'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Benutzer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $benutzer = $this->Benutzer->get($id);
        if ($this->Benutzer->delete($benutzer)) {
            $this->Flash->success(__('The benutzer has been deleted.'));
        } else {
            $this->Flash->error(__('The benutzer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
