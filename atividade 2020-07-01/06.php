<?php

$numero = $_REQUEST['num'];
$msg;

if($numero % 2 == 1){
    $msg = "numero IMPAR";
}else if($numero == ""){
    $msg = "paremetro vazio";
}else{
    $msg = "numero PAR";
}

$json['parImpar'] = $msg;

echo json_encode($json);