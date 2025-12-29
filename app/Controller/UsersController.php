<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'login');
    }

    public function login() {
        if ($this->Auth->loggedIn()) {
            return $this->redirect($this->Auth->redirectUrl());
        }
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Session->setFlash(__('Usuário ou senha inválidos.'));
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function add() {
        // Apenas para criar o primeiro usuário
        if ($this->request->is('post')) {
            $this->User->create();
            // A senha será criptografada pelo Model User.php automaticamente
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Usuário criado!'));
                return $this->redirect(array('action' => 'login'));
            }
        }
    }
}