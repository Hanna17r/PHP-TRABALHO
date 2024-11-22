<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar País por Seleção</title>
</head>
<body>
    <h1>Buscar País por Seleção</h1>
    <form action="result.php" method="GET">
        <label for="country_select">Escolha um país:</label>
        <select id="country_select" name="country_select" required>
            <option value="">Selecione...</option>
            <!-- Adicionar mais países conforme necessário -->
            <option value="Brasil">Brasil</option>
            <option value="Argentina">Argentina</option>
            <option value="França">França</option>
            <option value="Japão">Japão</option>
        </select>
        <button type="submit">Buscar</button>
    </form>
    <a href="index.php">Voltar para a página inicial</a>
</body>
</html>

