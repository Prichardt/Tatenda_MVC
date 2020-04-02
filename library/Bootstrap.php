<?php
/**
 * This class will get the url and put it into array
 * 
 * @author Prichard
 */
class Bootstrap{
    function __construct(){
        
        $url =isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url, '/');
        $url = explode('/',$url);

    //     if(empty($url[0])){
    //         require './controllers/Home.php';
    //         $controller = new Home();
    //         $controller->index();
    //         return false;
    //     }
        
    //     $file = 'controllers/'.$$this->convertToStudlyCaps($url[0]).'.php';
    //     if(file_exists($file)){
    //         require $file;
    //     }

    //     $controller = new $url[0];
    //     $controller->loadModel($url[0]);

    //     if(isset($url[2])){
    //         if(method_exists($controller, $url[1])){
    //             $controller->{$url[1]}($url[2]);//$controller->function()
    //         }
    //     }else{
    //         if(isset($url[1])){
    //             if(method_exists($controller, $url[1])){
    //                 $controller->{$url[1]}();
    //             }
    //         }else{
    //             $controller->index();
    //         }
    //     }
    if (is_numeric($url[1])) { echo "Yes"; } else { echo "No"; } 

    

    echo '<pre>'.var_dump($url).'</pre>';

    echo '<br/>';
    echo $this->convertToCamelCase($url[1]);
    echo '<br/>';
    echo $this->convertToStudlyCaps($url[0]);
    }
    protected function convertToStudlyCaps($string){
        return str_replace(' ', '',ucwords(str_replace('-',' ',$string)));
    }

    protected function convertToCamelCase($string){
        return lcfirst($this->convertToStudlyCaps($string));
    }
}