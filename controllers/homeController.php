<?php 
class homeController extends controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $dados = array(
            'tpl' => 'default'
        );

        $this->loadTemplate('home', $dados);
    }
}