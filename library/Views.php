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
        extract($args, EXTR_SKIP);
        require "views/$name";
        // require 'views/footer.php';
    }

    public function renderTemplate($template, $args =[]){
        static $twig =null;
        if($twig === null){
            $loader = new \Twig\Loader\FilesystemLoader('views');
            $twig = new \Twig\Environment($loader);
        }
        echo $twig->render($template, $args);
    }
}