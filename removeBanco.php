<?php
require_once("connectBanco.php");

$posicao = (int)$_GET["linha"];

$sql = "DELETE FROM formulario WHERE id = $posicao";

if ($con->query($sql) === TRUE) {
    echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl' crossorigin='anonymous'>";
    echo "<label for='exampleInputEmail1' class='form-label'>Removido com Sucesso!</label>";
    echo "<br><a class='btn btn-primary' href='mostraBanco.php'>Voltar</a>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;   
}

$con->close();
?>