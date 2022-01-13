<?php

$form1 = $_POST['form1'];
$form2 = $_POST['form2'];
$operador = $_POST['Operador'];

if ($operador == "+"){
    $somar = $form1 + $form2;
    echo $somar; 
}
if ($operador == "-"){
    $subtrair = $form1 - $form2;
    echo $subtrair;
}
if ($operador == "/"){
    $dividir = $form1 / $form2;
    echo $dividir;
}
if ($operador == "*"){
    $mult = $form1 * $form2;
    echo $mult;
}
if ($operador != "+" && $operador != "-" && $operador != "*" && $operador != "/")
{
    echo 'Estou com Preguiça!';
}
?>