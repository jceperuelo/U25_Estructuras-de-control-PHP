<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Captura de datos</title>
</head>
<body>
<?php
echo "El nombre ingresado es:";
echo $_REQUEST['nombre'];
echo "<br>";
if ($_REQUEST['edad']>=18){
    echo "Es mayor de edad";
}
else {
    echo "No es mayor de edad";
}

?>
</body>
</html>