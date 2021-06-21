<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="pagina2.php" method="post">
Ingrese su nombre:
<input type="text" name="nombre">
<br>
Seleccione en que rango se ubica sus ingresos:
<select name="operacion">
    <option value="valor1">1-1000</option>
    <option value="valor2">1001-3000</option>
    <option value="valor3">>3000</option>
</select>
<br>

<input type="submit" value="Confirmar">
</form>    
</body>
</html>