<?php

include 'app/core/Core.php';
$core = new Core;
$core->run();
echo "controller: ".$core->getController();
echo "<br>método: ".$core->getMetodo();

foreach($core->getParametros() as $param) {
    echo "<br>parâmetros: ".$param;

}

    