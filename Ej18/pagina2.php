<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
    $dia = $_REQUEST['dia'];
    switch ($dia) {
        case 'Lunes':
        case 'Martes':
        case 'Miércoles':
        case 'Jueves':
        case 'Viernes':
        print "$dia es un día laboral";    
    break;
        case 'Sábado':
        case 'Domingo':
        print " $dia no es un día laboral";
    break;
}
?>
    
</body>
</html>