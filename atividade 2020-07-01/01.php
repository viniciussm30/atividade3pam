<h1>Digite dois números para a subtração</h1>
<form action="#">
    <div>
        <label>Número 1</label>
        <input type="text" name="num1" id="num1">
    </div>
    <br>
    <div>
        <label>Número 2</label>
        <input type="text" name="num2" id="num2">
    </div>
    <br>
    <button>Resultado</button>
</form>
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