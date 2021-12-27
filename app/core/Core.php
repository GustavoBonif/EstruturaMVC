<?php

class Core {
    private $controller;
    private $metodo;
    private $parametros = array();

    public function __construct()
    {   
        $this->verificaUri();
    }

    public function run()
    {
        $controllerCorrente = $this->getController();

        $c = new $controllerCorrente();
        /*
            call_user_func_array( array(objeto instanciado, método da classe), parâmetros para o método) 
            
            isso vai fazer com que o método enviado pela URI seja chamado logo após o objeto ser instanciado, já passando os parâmetros
        */

        call_user_func_array(array($c, $this->getMetodo()), $this->getParametros());

    }

    public function verificaUri() 
    {

        $url = explode("index.php", $_SERVER["PHP_SELF"]);
        $url = end($url);

        if ($url != "") {
            $url = explode("/", $url);
            array_shift($url);
            
            // Pega o controller
            $this->controller = ucfirst($url[0]) . "Controller";
            array_shift($url);

            // Pega o método
            if(isset($url[0])) {
                $this->metodo = $url[0];
                array_shift($url);
            }

            // Pega os parâmetros
            if(isset($url[0])) {
                $this->parametros = array_filter($url);            
            }

        } else {
            $this->controller = ucfirst(CONTROLLER_PADRAO) . "Controller";
        }

    }

    
    public function getController()
    {
        if(class_exists(NAMESPACE_CONTROLLER . $this->controller)) {
            return NAMESPACE_CONTROLLER . $this->controller;
        }

        return NAMESPACE_CONTROLLER . ucfirst(CONTROLLER_PADRAO) . "Controller";
    }

    public function setController($controller)
    {
        $this->controller = $controller;

        return $this;
    }

    public function getMetodo()
    {
        if (method_exists(NAMESPACE_CONTROLLER . $this->controller, $this->metodo)) {
            return $this->metodo;
        }

        // se o método não existir, retorna o método padrão "index"
        return METODO_PADRAO;

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