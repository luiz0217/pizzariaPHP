<?php
define('INCLUDE_PATH','http://localhost/www/pitzariaPHP/');
define('INCLUDE_PATH_FULL','http://localhost/www/pitzariaPHP/views/pages/');
class Aplication
{
    public function executar(){
        $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';
        $url = ucfirst($url);
        $url.="Controller";
        if(file_exists('Controllers/'.$url.'.php')){
            $className = 'Controllers\\'.$url;
            $controller = new $className();
            $controller->executar();
        }
        else{
            die('não existe controlador');
        }
    }
}


?>