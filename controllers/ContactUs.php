<?php

class ContactUs extends Controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $data = array(
            "pageName"=>('Contact Us')            
        );
      
     
        $this->view->renderTemplate('contact-us/index.html', $data);
    }
}