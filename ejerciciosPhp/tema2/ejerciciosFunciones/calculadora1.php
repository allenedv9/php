<!DOCTYPE html>
<html >
<head>
<meta  charset=utf-8" />
<title>Calculadora</title>
</head>
<body>
<h1> Calculadora</h1>
<form action="calculadora2.php" method="post">
n1: <input type="text" size="20" maxlength="20" name="primera">
n2: <input type="text" size="20" maxlength="20" name="segunda">
<select name="operador">
<option value="+">Sumar</option>
<option value="-">Restar</option>
<option value="*">Multiplicar</option>
<option value="/">Dividir</option>
</select>

<input type="submit" name="submit" value="enviar">
</form>
</body>
</html>
