<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
if (isset ($_REQUEST['check1']))
{
    $futbol=$_REQUEST['nombre'];
    echo $_REQUEST['nombre']. " practica fútbol";
    echo "<br>";
}

if (isset ($_REQUEST['check2']))
{
    $futbol=$_REQUEST['nombre'];
    echo $_REQUEST['nombre']. " practica baloncesto";
    echo "<br>";
}

if (isset ($_REQUEST['check3']))
{
    $futbol=$_REQUEST['nombre'];
    echo $_REQUEST['nombre']. " practica tennis";
    echo "<br>";
}

if (isset ($_REQUEST['check4']))
{
    $futbol=$_REQUEST['nombre'];
    echo $_REQUEST['nombre']. " practica voley";
    echo "<br>";
}
?>
    
</body>
</html>