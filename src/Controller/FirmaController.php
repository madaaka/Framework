<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Firma Controller
 *
 * @property \App\Model\Table\FirmaTable $Firma
 *
 * @method \App\Model\Entity\Firma[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FirmaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $firma = $this->paginate($this->Firma);

        $this->set(compact('firma'));
    }

    /**
     * View method
     *
     * @param string|null $id Firma id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $firma = $this->Firma->get($id, [
            'contain' => []
        ]);

        $this->set('firma', $firma);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $firma = $this->Firma->newEntity();
        if ($this->request->is('post')) {
            $firma = $this->Firma->patchEntity($firma, $this->request->getData());
            if ($this->Firma->save($firma)) {
                $this->Flash->success(__('The firma has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The firma could not be saved. Please, try again.'));
        }
        $this->set(compact('firma'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Firma id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $firma = $this->Firma->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $firma = $this->Firma->patchEntity($firma, $this->request->getData());
            if ($this->Firma->save($firma)) {
                $this->Flash->success(__('The firma has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The firma could not be saved. Please, try again.'));
        }
        $this->set(compact('firma'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Firma id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $firma = $this->Firma->get($id);
        if ($this->Firma->delete($firma)) {
            $this->Flash->success(__('The firma has been deleted.'));
        } else {
            $this->Flash->error(__('The firma could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
