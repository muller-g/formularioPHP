<?php

$con = mysqli_connect("localhost", "root", "", "formulario");

if(!$con){
  die("Falha na conexao: " . mysqli_connect_error());
}
?>