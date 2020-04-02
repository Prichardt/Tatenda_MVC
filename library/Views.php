<?php
class Views{

    /**
     * Render a view file
     * 
     * @param string $name the vile file
     * 
     * @param $args = [] for data value as an array
     * 
     * @return view
     */

    public function render($name, $args = []){
        require "views/header.php";
        require "views/$name/index.php";
        require 'views/footer.php';
    }
}