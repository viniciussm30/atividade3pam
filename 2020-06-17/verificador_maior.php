<?php
    $numero1 = $_REQUEST['numero1'];
    $numero2 = $_REQUEST['numero2'];

    $maior= "";
    $menor = "";
    $msg = "";

    if($numero1 > $numero2){
        $msg = "maior é $numero1";
        $maior = $numero1;
        $menor= $numero2;
    }elseif($numero1 == $numero2){
        $msg = "ambos são iguais";
        $maior ="ambos são iguais";
        $menor = "ambos são iguais";
    }else{
        $msg = "maior é $numero2";
        $maior = $numero2;
        $menor = $numero1;
    }

    $jsonencode["operacao"] = "maior";
    $jsonencode["numero1"] = $numero1;
    $jsonencode["numero2"] = $numero2;
    $jsonencode["maior"] = $maior;
    $jsonencode["menor"] = $menor;
    $jsonencode["msg"] = $msg;

    echo json_encode($jsonencode);



?>