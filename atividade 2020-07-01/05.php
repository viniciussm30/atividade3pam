<h1>Positivo ou Negativo</h1>
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
    if($numero > 0){
        $msg = "seu numero e MAIOR que zero";
    }else if($numero == ""){
        $msg = "parametro vazio";
    }else{
        $msg = "seu numero e MENOR que zero";
    }

    $json['postivoNegativo'] = $msg;

    echo json_encode($json);