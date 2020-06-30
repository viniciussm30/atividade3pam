<h1>Ver qual número é maio</h1>
<form action="#">
    <div>
        <label for="">Numero 1</label>
        <input type="text" name="num1" id="num1">
    </div>
    <br>
    <div>
        <label for="">Numero 2</label>
        <input type="text" name="num2" id="num2">
    </div>
    <br>
    <button>Resultado</button>
</form>

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