<?php
namespace app\controllers;
use app\core\Controller;
use app\models\M_Cliente;

class ClienteController extends Controller{

    public function index() {
        echo "Método index";
    }

    public function lista()
    {
        $clientes = new M_Cliente;
        $dados["clientes"] = $clientes->lista();
        $this->load("v_cliente", $dados);
        
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