<?php
// Verifica se os dados foram enviados via GET
$country_name = $_GET['country_name'] ?? $_GET['country_select'] ?? '';

// Verifica se o nome do país foi fornecido
if (empty($country_name)) {
    echo "Nenhum país foi fornecido!";
    exit;
}

// URL da API REST Countries
$api_url = "https://restcountries.com/v3.1/name/" . urlencode($country_name);

// Fazendo a requisição para a API
$response = file_get_contents($api_url);

// Verificando se houve resposta da API
if ($response === FALSE) {
    echo "Erro ao tentar acessar a API!";
    exit;
}

// Decodificando a resposta JSON da API
$data = json_decode($response, true);

// Verificando se o país foi encontrado
if (isset($data[0])) {
    $country = $data[0];
    echo "<h1>Informações sobre: " . $country['name']['common'] . "</h1>";
    echo "<ul>";
    echo "<li><strong>Capital:</strong> " . $country['capital'][0] . "</li>";
    echo "<li><strong>População:</strong> " . number_format($country['population']) . "</li>";
    echo "<li><strong>Área:</strong> " . number_format($country['area']) . " km²</li>";
    echo "<li><strong>Região:</strong> " . $country['region'] . "</li>";
    echo "<li><strong>Sub-região:</strong> " . $country['subregion'] . "</li>";
    echo "<li><strong>Moeda:</strong> " . $country['currencies'][key($country['currencies'])]['name'] . "</li>";
    echo "</ul>";
} else {
    echo "<p>País não encontrado.</p>";
}

echo "<br><a href='index.php'>Voltar para a página inicial</a> | <a href='result.php?country_name=" . urlencode($country_name) . "'>Reenviar consulta</a>";
?>