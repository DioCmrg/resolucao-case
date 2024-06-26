<!DOCTYPE html>
<html>
<head>
    <title>MEU CEP</title>
</head>
<body> 
    <!-- Formulário para entrada do CEP -->
    <form action="index.php" method="post">
        <label>Insira o CEP:</label>
        <input type="text" name="cep" required> <!-- Campo de entrada para o CEP -->
        <input type="submit" value="Enviar"> <!-- Botão para enviar o formulário -->
    </form>

    <?php
    include 'Address.php'; // Inclui o arquivo Address.php que contém a classe Address

    // Verifica se o campo 'cep' foi enviado via POST e não está vazio
    if (!empty($_POST['cep'])) {
        $cep = $_POST['cep']; // Obtém o valor do CEP enviado pelo formulário
        $address = new Address(); // Cria uma nova instância da classe Address
        $result = $address->get_address($cep); // Chama o método get_address para obter os dados do CEP

        // Verifica se os dados do endereço foram retornados e se o logradouro está definido
        if ($result && isset($result->logradouro)) {
            echo "<div class='result'>"; // Inicia a div para exibir os resultados
            echo "<br><br>CEP Informado: {$cep}<br>"; // Exibe o CEP informado
            echo "Rua: {$result->logradouro}<br>"; // Exibe a rua
            echo "Bairro: {$result->bairro}<br>"; // Exibe o bairro
            echo "Cidade: {$result->localidade}<br>"; // Exibe a cidade
            echo "Estado: {$result->uf}<br>"; // Exibe o estado
            echo "</div>";
        } else {
            // Caso os dados não sejam encontrados, exibe uma mensagem de erro
            echo "<div class='result'>";
            echo "<br><br>CEP Informado: {$cep}<br>";
            echo "Dados não encontrados.<br>";
            echo "</div>";
        }
    }
    ?>

</body>
</html>