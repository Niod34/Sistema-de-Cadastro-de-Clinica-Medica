<?php
require 'conexao.php';

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro de Medicamentos</title>
</head>
<body>
    <main class="container">
        <form action="cadastro.php" method="post" class="form-cadastro">
            <h1>Cadastro de Paciente</h1><br>
    
           <label for="nome">Nome Completo:</label><br>
            <input type="text" id="nome" name="nome" class="form" required minlength="3" placeholder="Digite o nome completo"><br>

            <label for="data">Data de Nascimento:</label><br>
            <input type="date" id="data" name="data" class="form" required max="2006-11-14"><br>

            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" class="form" required placeholder="exemplo@gmail.com"><br>

            <label for="telefone">Telefone:</label><br>
            <input type="tel" id="telefone" name="telefone" class="form" pattern="\d{10,11}" required placeholder="Somente números (10-11 dígitos)"><br>

            <label for="endereco">Endereço:</label><br>
            <input type="text" id="endereco" name="endereco" class="form" required placeholder="Digite o endereço"><br>

            <label for="sexo">Sexo:</label><br>
            <select name="sexo" id="sexo" class="form" required>
                <option value="">Selecione</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option>
            </select><br>
            
            
            
            <button class="uiverse">Cadastrar</button>
        </form>

    </main>
</body> 
</html>
