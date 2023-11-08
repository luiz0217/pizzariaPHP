<?php
namespace Views;

class MainView
{
    private $fileName;
    private $header;
    private $footer;


    const titulo = 'Projeto MVC';
    public $menuItens = ['Home','Sobre','Contato'];

    public function __construct($fileName,$header = 'header.php',$footer = 'footer.php'){
        $this->fileName = $fileName;
        $this->header = $header;
        $this->footer = $footer;
    }

    public function render($arr = []){
        if($this->header != null){
            include('pages/templates/'.$this->header);
        }
        include('pages/'.$this->fileName.'.php');
        if ($this->footer != null) {
            include('pages/templates/'.$this->footer);
        }
    }
}
$alto = [];



?>