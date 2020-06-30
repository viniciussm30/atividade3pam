<h1>Digite três números para a soma</h1>
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
    <div>
        <label for="">Numero 2</label>
        <input type="text" name="num3" id="num3">
    </div>
    <br>
    <button>Resultado</button>
</form>

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