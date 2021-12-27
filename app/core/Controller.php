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

        echo "<pre>";
        print_r($viewDados);

        include "app/views/" . $viewName . ".php";

    }
    
}