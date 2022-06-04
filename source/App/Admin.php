<?php

namespace Source\App;

use Source\Core\Controller;

class Admin extends Controller{

    public function __construct(){

        parent:: __construct(__DIR__. "/../../themes/".CONF_VIEW_THEME."/");
    }

    public function login(): void{
        echo $this->view->render("login",[
            "title"=> "ACR- Faz Login e Inicia a tua sessão"]);
    }
    public function principal(): void{
        echo $this->view->render("principal",[
            "title"=> "ACR- Controle Geral"]);
    }

    public function error(array $data): void{
        echo "<h1>ERROR</h1>";
        var_dump($data);
    }
}