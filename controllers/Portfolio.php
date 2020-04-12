<?php

class Portfolio extends Controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $data = array(
            "pageName"=>('Portfolio')            
        );
      
     
        $this->view->renderTemplate('portfolio/index.html', $data);
    }
}