<?php
define('DS',DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('BASIC_CLASS',ROOT.DS.'library/');

function __autoload($class){
    if(is_file(BASIC_CLASS.$class.".php")){
        require BASIC_CLASS.$class.".php";
    }
}