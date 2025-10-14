<?php 
include "Funcionario.php";

$func = new Funcionario();
$func -> setCriarFuncionario("Artur",21,"RH",2000);
$func -> getMostrarFuncionario();

?>