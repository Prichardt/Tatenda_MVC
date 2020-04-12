<?php

class Services extends Controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $data = array(
            "pageName"=>('Services')            
        );
      
     
        $this->view->renderTemplate('services/index.html', $data);
    }
}