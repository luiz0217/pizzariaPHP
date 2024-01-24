<?php
define('INCLUDE_PATH', 'http://localhost/www/pitzariaPHP/');
define('INCLUDE_PATH_FULL', 'http://localhost/www/pitzariaPHP/views/pages/');
class Aplication
{
    public function executar()
    {
        session_start();
        // print_r($_SESSION);

        $url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'Home';
        $url = ucfirst($url);
        $url .= "Controller";
        if (file_exists('Controllers/' . $url . '.php')) {
            if (isset($_SESSION['login']) || $url == 'HomeController') {
                $className = 'Controllers\\' . $url;
                $controller = new $className();
                $controller->executar();
            } 
            else {
                include "Views/pages/404.php";
                die();
            }
        } 
        else {
            include "Views/pages/404.php";
            die();
        }
    }
}


?>