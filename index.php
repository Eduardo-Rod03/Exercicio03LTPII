<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pedido de Lanche</title>
</head>
<body>

    <h1>Pedido de Lanche</h1>

    <form method="POST" action="">
        <label>Nome do cliente:</label>
        <input type="text" name="nome" required>
        <br><br>

        <label>Tipo de lanche:</label>
        <select name="lanche" required>
            <option value="">Selecione um lanche</option>
            <option value="Hambúrguer">Hambúrguer</option>
            <option value="Hot Dog">Hot Dog</option>
            <option value="Misto Quente">Misto Quente</option>
            <option value="X-Bacon">X-Bacon</option>
        </select>
        <br><br>

        <label>Quantidade:</label>
        <input type="number" name="quantidade" min="1" required>
        <br><br>

        <button type="submit">Fazer pedido</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST["nome"]);
        $lanche = htmlspecialchars($_POST["lanche"]);
        $quantidade = (int) $_POST["quantidade"];

        if ($quantidade >= 1 && $lanche != "") {
            echo "<h2>Resumo do Pedido</h2>";
            echo "<p><strong>Cliente:</strong> $nome</p>";
            echo "<p><strong>Lanche:</strong> $lanche</p>";
            echo "<p><strong>Quantidade:</strong> $quantidade</p>";
        } else {
            echo "<p>Por favor, informe um pedido válido.</p>";
        }
    }
    ?>

</body>
</html