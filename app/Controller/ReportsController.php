<?php
App::uses('AppController', 'Controller');

class ReportsController extends AppController {

    public function index() {
        // Título da página para a view
        $this->set('title_for_layout', 'Relatórios Gerenciais');
    }
}