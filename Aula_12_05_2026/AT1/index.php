<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tudo Sobre Você</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"],
        input[type="email"] {
            width: 300px;
            padding: 8px;
            margin-top: 5px;
        }
        input[type="submit"] {
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<form method="post">
    <!-- aqui eu adiciomo os campos do formulário -->
    <label>Nome:</label>
    <input type="text" name="nome" id="nome"><br><br>
    <label >E-mail:</label>
    <input type="email" name="email" id="email"><br><br>
    <label>Cargo Desejado</label>
        <input type="text" name="cargo" id="cargo"><br><br>
        <label>Área de Atuação</label>
    <input type="text" name="area" id="area"><br><br>
    <label >Disponibilidade de Horário</label>
    <input type="text" name="horario" id="horario"><br><br>
    <input type="submit" value="Enviar"><br><br>
</form>
<?php 
function  exibirCampo($label, $valor) {
    echo "<p><strong>$label:</strong> $valor</p>";
}
exibirCampo ("Nome", $_POST["nome"] ?? "");
exibirCampo ("E-mail", $_POST["email"] ?? "");
exibirCampo ("Cargo Desejado", $_POST["cargo"] ?? "");
exibirCampo ("Área de Atuação", $_POST["area"] ?? "");
exibirCampo ("Disponibilidade de Horário", $_POST["horario"] ?? "");


?>
</body>
</html>