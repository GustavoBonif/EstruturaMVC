<?php
namespace app\controllers;
use app\core\Controller;
<<<<<<< HEAD
use app\models\M_Cliente;
=======
>>>>>>> fcf47ae07b6da8f121abae96e22d53fec71c580c

class ClienteController extends Controller{

    public function index() {
        echo "Método index";
    }

    public function lista()
    {
<<<<<<< HEAD
        $clientes = new M_Cliente;
        $dados["clientes"] = $clientes->lista();
        $this->load("v_cliente", $dados);
        
=======
        echo "<br>estou listando os clientes<br>";
>>>>>>> fcf47ae07b6da8f121abae96e22d53fec71c580c
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