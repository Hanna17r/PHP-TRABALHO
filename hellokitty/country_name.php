<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar País por Nome</title>
</head>
<body>
    <h1>Buscar País por Nome</h1>
    <form action="result.php" method="GET">
        <label for="country_name">Digite o nome do país:</label>
        <input type="text" id="country_name" name="country_name" required>
        <button type="submit">Buscar</button>
    </form>
    <a href="index.php">Voltar para a página inicial</a>
</body>
</html>
