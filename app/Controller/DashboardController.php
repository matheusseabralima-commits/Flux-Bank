<?php
App::uses('AppController', 'Controller');

class DashboardController extends AppController {
    
    // Precisamos usar o Model Corban para pegar os dados
    public $uses = array('Corban');

    public function metrics() {
        // Cálculos para o Dashboard
        $totalVolume = $this->Corban->find('first', array(
            'fields' => array('SUM(Corban.volume) as total')
        ));
        $totalVolume = $totalVolume[0]['total'] ? $totalVolume[0]['total'] : 0;

        $totalCorbans = $this->Corban->find('count');
        
        // Pega os top 5 para o ranking
        $corbans = $this->Corban->find('all', array(
            'limit' => 5,
            'order' => array('Corban.volume' => 'DESC')
        ));

        $this->set(compact('totalVolume', 'totalCorbans', 'corbans'));
    }
}