<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        select, input {
            width: 170px;
            display: inline-block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<?php

$number1 = $_GET["number1"];
$number2 = $_GET["number2"];
$selected_eval = $_GET["selectedeval"];

class Calculator
{
    public $first;
    public $eval;
    public $second;

    function calcu($first, $eval, $second ){
        $this->first = $first;
        $this->eval = $eval;
        $this->second = $second;
    }
    function calculator(){
//        return eval('return '.$this->first.$this->eval.$this->second.";");
        return eval('return '.$this->first.$this->eval.$this->second.";");

    }
}
$tinh = new Calculator();
$tinh->calcu($number1, $selected_eval, $number2);

//    if($_SERVER["REQUEST_METHOD"]=="GET"){
//        $number1 = $_GET["number1"];
//        $number2 = $_GET["number2"];
//        $selected_eval = $_GET["selectedeval"];
//        $result = $number1.$selected_eval.$number2;
//        echo eval('$result');
//    }
?>
<form action="" method="get">
    <input type="number" name="number1" placeholder="So thu nhat"><br>
    <select name="selectedeval" id="">
        <option value="+">Cong</option>
        <br>
        <option value="-">Tru</option>
        <br>
        <option value="*">Nhan</option>
        <br>
        <option value="/">chia</option>
        <br>
    </select><br>
    <input type="number" name="number2" placeholder="So thu hai">
    <p>Result: <?php echo $number1.$selected_eval.$number2.'='.$tinh->calculator()?></p>
    <button type="submit">Tinh</button>

</form>

</body>
</html>
<?php
