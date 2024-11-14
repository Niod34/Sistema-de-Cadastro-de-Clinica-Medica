!

<?php
require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $data_nascimento = $_POST["data"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $sexo = $_POST["sexo"];

    $mensagem = "";

    try {
        $sql = "INSERT INTO pacientes (nome, data_nascimento, email, telefone, endereco, sexo) 
                VALUES (:nome, :data_nascimento, :email, :telefone, :endereco, :sexo)";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':data_nascimento', $data_nascimento);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':sexo', $sexo);
        
        if ($stmt->execute()) {
            header("Location: mensagem.php?mensagem=Paciente cadastrado com sucesso!");
            exit; // 
        } else {
            
            header("Location: mensagem.php?mensagem=Erro ao cadastrar paciente.");
            exit;
        }
    } catch (PDOException $e) {
        header("Location: mensagem.php?mensagem=Erro: " . $e->getMessage());
        exit;
    }
}
?>


