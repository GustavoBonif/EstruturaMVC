<?php

class Core {
    private $controller;
    private $metodo;
    private $parametros = array();

    public function run() 
    {

        $url = explode("index.php", $_SERVER["PHP_SELF"]);
        $url = end($url);

        if ($url != "") {
            $url = explode("/", $url);
            array_shift($url);
            
            // Pega o controller
            $this->controller = $url[0];
            array_shift($url);

            // Pega o método
            $this->metodo = $url[0];
            array_shift($url);

            // Pega os parâmetros
            $this->parametros = array_filter($url);
            

        }
        echo "<pre>";
        print_r($url);
    }

    
    public function getController()
    {
        return $this->controller;
    }

    public function setController($controller)
    {
        $this->controller = $controller;

        return $this;
    }

    public function getMetodo()
    {
        return $this->metodo;
    }


    public function setMetodo($metodo)
    {
        $this->metodo = $metodo;

        return $this;
    }

    public function getParametros()
    {
        return $this->parametros;
    }

    public function setParametros($parametros)
    {
        $this->parametros = $parametros;

        return $this;
    }
}