<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title>Document</title>
</head>
<body>

<?php 
// EJERCICIO 1
// $numero_aleatorio =rand(1,3);
// $array =array("uno", "dos", "tres");
// for ($i=0; $i < 3 ; $i++) { 
//     if ($numero_aleatorio == $i+1) {
//         echo "$numero_aleatorio";
//         echo "$array[$i]";
//     }
// }


// EJERCICIO 2 //


// echo "Tabla del 2 con el for";
// echo "<br>";
// for ($f = 2; $f <= 20; $f = $f + 2) {
//   echo $f;
//   echo "-";
// }
// echo "<br>";
// echo "Tabla del 2 con el while";
// echo "<br>";
// $f = 2;
// while ($f <= 20) {
//   echo $f;
//   echo "-";
//   $f = $f + 2;
// }
// echo "<br>";
// echo "Tabla del 2 con el do/while";
// echo "<br>";
// $f = 2;
// do {
//   echo $f;
//   echo "-";
//   $f = $f + 2;
// } while ($f <= 20);
?>

<!-- //EJERCICIO 3// -->
<form method="post" action="pagina2.php">
Ingrese su nombre:
<input type="text" name="nombre">
<br>
Ingrese su edad:
<input type="text" name="edad">
<br>
<input type="submit" value="confirmar">
</body>
</html>