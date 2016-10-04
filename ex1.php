<!DOCTYPE html>
<html>
<head>
    <title>Ex 1</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Exercici 1</h1>

<form action="ex1.php" method="post">
    <input type="text" name="nota" value="">
    <input type="submit" value="Calcular literal">
</form>

<?php
$nota = $_POST["nota"];
echo "Nota: $nota<br>";
echo "Literal: ";
switch($nota) {
    case 5:
        echo "Suficient";
        break;
    case 6:
        echo "Bé";
        break;
    case 7:
    case 8:
        echo "Notable";
        break;
    case 9:
    case 10:
        echo "Exel·lent";
        break;
    default:
        echo "Insuficient";
}
?>
</body>
</html>