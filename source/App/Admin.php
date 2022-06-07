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

    public function produtos(): void{
        echo $this->view->render("produtos",[
            "title"=> "ACR- Controle Geral dos Produtos"]);
    }

    public function revendedores(): void{
        echo $this->view->render("revendedores",[
            "title"=> "ACR- Controle Geral dos Revendedores"]);
    }

    public function creat_cont(): void{
        echo $this->view->render("creat_cont",[
            "title"=> "ACR- Cria a sua conta"]);
    }

    public function error(array $data): void{
        
        echo $this->view->render("not_found",[
            "title"=> "404-Página não encontrado"]);
    }
}