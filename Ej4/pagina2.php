<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
// echo $_REQUEST['nombre'];
// $nom= $_REQUEST['nombre'];

if ($_REQUEST ['radio1']=="estudios")
{
    echo $_REQUEST['nombre']."  no tiene estudios";
}
else
{ if ($_REQUEST['radio1']=="estudios1")
    echo $_REQUEST['nombre']."  tiene estudios primarios";
}

{ if ($_REQUEST['radio1']=="estudios2")
    echo $_REQUEST['nombre']."  tiene estudios secundarios";
}



?>    
</body>
</html>