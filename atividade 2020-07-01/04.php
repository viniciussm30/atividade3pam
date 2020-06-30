<?php
    $numero1 = $_REQUEST['num1'];
    $numero2 = $_REQUEST['num2'];

    $total;

    if($numero2 == 0){
        $total = "Nao e possivel divisao por 0"; 
    }
    else if($numero1 == "" || $numero2 == ""){
        $total = "Informe os parametros";
    }
    else{
        $total = $numero1 / $numero2;
    }

    $json['divisao'] = $total;

    echo json_encode(round($json));