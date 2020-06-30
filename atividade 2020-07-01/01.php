<?php
    $numero1 = $_REQUEST['num1'];
    $numero2 = $_REQUEST['num2'];
    $total;

    if($numero1 == "" || $numero2 == ""){
        $total = "Informa parametro";
    }else{
        $total = $numero1 - $numero2;
    }
    
    $json['subtracao'] = $total;

    echo json_encode($json);