<?php
App::uses('Controller', 'Controller');

class AppController extends Controller {
    
    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'dashboard', 'action' => 'metrics'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish',
                    'fields' => array('username' => 'username', 'password' => 'password')
                )
            ),
            'authorize' => array('Controller')
        )
    );

    public function beforeFilter() {
        $this->Auth->allow('login', 'add'); // Libera login e registro
        $this->layout = null; // Remove layout padrão do Cake para usar nosso HTML completo
    }

    public function isAuthorized($user) {
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }
        return false;
    }
}