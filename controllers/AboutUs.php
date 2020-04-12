<?php

class AboutUs extends Controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $data = array(
            "pageName"=>('About Us')            
        );
      
     
        $this->view->renderTemplate('about-us/index.html', $data);
    }
}