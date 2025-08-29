<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calcular.php" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required>
        <br>
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required>
        <br>
        <label for="operation">Operação:</label>
        <select id="operation" name="operation" required>
            <option value="add">somar</option>
            <option value="subtract">Subtrair</option>
            <option value="multiply">Multiplicar</option>
            <option value="divide">Dividir</option>
            <option value="null"></option>
        </select>
        <br>
        <input type="submit" value="Calcular">
    </form>
    
</body>
</html>