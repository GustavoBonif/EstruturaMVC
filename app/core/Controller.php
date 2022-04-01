<?php
namespace app\core;

class Controller{
    public function load($viewName, $viewDados = array())
    {
        /* extract: cada chave do array associativo vira uma variável com o valor da variável sendo o valor da chave do array
         exemplo: 
            array('nome' => 'Gustavo'); 
            vai virar 
            $nome = 'Gustavo';

        */
        extract($viewDados);

<<<<<<< HEAD
=======
        echo "<pre>";
        print_r($viewDados);

>>>>>>> fcf47ae07b6da8f121abae96e22d53fec71c580c
        include "app/views/" . $viewName . ".php";

    }
    
}