<h1>Par ou ímpar</h1>
<form action="#">
    <div>
        <label for="">Número</label>
        <input type="text" name="num" id="num">
    </div>
    <br>
    <button>Resultado</button>
</form>
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