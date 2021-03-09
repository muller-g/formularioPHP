<?php
require_once("connectBanco.php");

$sql = "SELECT * from formulario";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $id[] = $row["id"];
    $name[] = $row["nameC"];
    $email[] = $row["email"];
    $date[] = $row["dateNasc"];
    $state[] = $row["stateBr"];
  }
} else {
}
$con->close();

echo "<link href='style.css' rel='stylesheet'>";
echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl' crossorigin='anonymous'>";
echo "<div class='form-table'>";
echo "<table class='table'>";
    echo "<thead>";
        echo "<tr>";
            echo "<th scope='col'>#</th>";
            echo "<th scope='col'>Nome</th>";
            echo "<th scope='col'>Email</th>";
            echo "<th scope='col'>Data Nascimento</th>";
            echo "<th scope='col'>Estado</th>";
            echo "<th scope='col'>Remove</th>";
        echo "</tr>";
    echo "</thead>";

for ($i = 0; $i < $result->num_rows; $i++) {
        echo "<tbody>";
            echo "<tr>";    
                echo "<th scope='row'>$id[$i]</th>";
                echo "<td>$name[$i]</td>";
                echo "<td>$email[$i]</td>";
                echo "<td>$date[$i]</td>";
                echo "<td>$state[$i]</td>";
                echo "<td><a href='removeBanco.php?linha=$id[$i]'>x</a></td>";
                echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</div>";
echo "<div class='btn-menu'>";
echo "<br><a class='btn btn-primary' href='index.html'>Cadastrar Novo</a>";
echo "<br><a class='btn btn-primary' href='login.html'>Sair</a>";
echo "</div>";
?>