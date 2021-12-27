<?php
namespace app\controllers;
use app\core\Controller;

class ClienteController extends Controller{

    public function index() {
        echo "Método index";
    }

    public function lista()
    {
        echo "<br>estou listando os clientes<br>";
    }

    public function ver()
    {
        $dados = array(
            'nome' => 'Gustavo Bonifácio',
            'email' => 'gustavo@gmail.com'
        );
        $this->load("v_cliente", $dados);
    }

}