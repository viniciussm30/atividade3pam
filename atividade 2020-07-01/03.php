<?php

    $numero1 = $_REQUEST['num1'];
    $numero2 = $_REQUEST['num2'];

    $msg;

    if($numero1 > $numero2){
        $msg = "$numero1 e maior que $numero2";
    }else if($numero1 == $numero2 ){
        $msg = "$numero1 e igual a $numero2";
    }else{
        $msg = "$numero2 e maior que $numero1";
    }

    $json['maior'] = $msg;

    echo json_encode($json);