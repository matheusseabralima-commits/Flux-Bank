<?php
App::uses('AppController', 'Controller');

class SettingsController extends AppController {

    public function index() {
        $this->set('title_for_layout', 'Configurações do Sistema');
        
        // Simulação de dados do usuário para preencher o formulário
        $userSettings = [
            'nome' => 'Administrador',
            'email' => 'admin@empresa.com',
            'notificacoes' => true,
            'manutencao' => false
        ];
        
        $this->set('userSettings', $userSettings);
    }
}