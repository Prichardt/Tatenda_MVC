<?php

class AboutUs extends Controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){
        // echo "We are in home index";
        $data = array(
            "id"=>Session::get('id'),
            "username"=>"Tatenda"   
        );
      
     
        $this->view->renderTemplate('about-us/index.html', $data);
    }
}