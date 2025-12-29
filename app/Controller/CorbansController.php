<?php
App::uses('AppController', 'Controller');

class CorbansController extends AppController {

    public function index() {
        $this->Corban->recursive = 0;
        // Paginação simples
        $this->paginate = array('limit' => 20, 'order' => array('Corban.volume' => 'DESC'));
        $this->set('corbans', $this->paginate());
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Corban->create();
            if ($this->Corban->save($this->request->data)) {
                $this->Session->setFlash(__('Corban salvo com sucesso.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Erro ao salvar.'));
        }
    }

    public function edit($id = null) {
        if (!$this->Corban->exists($id)) {
            throw new NotFoundException(__('Corban inválido'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Corban->save($this->request->data)) {
                $this->Session->setFlash(__('Salvo com sucesso.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Erro ao salvar.'));
        } else {
            $this->request->data = $this->Corban->findById($id);
        }
    }

    public function delete($id = null) {
        $this->Corban->id = $id;
        if (!$this->Corban->exists()) {
            throw new NotFoundException(__('Corban inválido'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Corban->delete()) {
            $this->Session->setFlash(__('Corban deletado.'));
        } else {
            $this->Session->setFlash(__('Erro ao deletar.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}