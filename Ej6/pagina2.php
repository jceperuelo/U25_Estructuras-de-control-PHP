<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

$nombre = $_REQUEST['nombre'];

if ($_REQUEST['operacion']=="valor3")
{
    echo $nombre. " debe pagar impustos.";
}
else
{
    echo $nombre. " no debe pagar impuestos a las ganancias.";
}



?>
    
</body>
</html>