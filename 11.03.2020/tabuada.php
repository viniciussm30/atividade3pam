<?php

if (!isset($_REQUEST['valor'])){
    echo "informe um parametro, impossvel realizar sem um valor";
    exit;
}else{
    $valor = $_REQUEST['valor'];
}


if($valor < 0){
    echo "voce informou um numero menor que 0";
}
elseif($valor > 50){
    echo "voce informou um numero maior que 50";
}else{
    $resultado['tabuada'] = $valor;
    $mult = 1;
    while ($mult <= 10){
        $resultado[$valor . 'x' . $mult] = $valor * $mult;
        $mult++;
        
    }
    echo json_encode($resultado);
}

