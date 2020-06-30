<?php
    $numero1 = $_REQUEST['num1'];
    $numero2 = $_REQUEST['num2'];
    $numero3 = $_REQUEST['num3'];
    $total;

    if($numero1 == "" || $numero2 == "" & $numero3 == ""){
        $total = "parametro vazio";
    }else{
        $total = $numero1 + $numero2 + $numero3;
    }


    $json['soma'] = $total;

    echo json_encode($json);