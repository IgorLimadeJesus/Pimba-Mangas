<?php
include_once("conexao.php");

    $nome = $_POST['nome-register'];
    $email = $_POST['email-register'];
    $senha = $_POST['senha-register'];
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (nome, email, senha) VALUES (?, ?, ?)";    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nome, $email, $senhaHash);

    
    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
        // Redirecionar para a página de login ou outra página
        header("Location: http://localhost/Pimba-Mangas/src/pages/sucess/sucess.html");
        exit();
    } else {
    echo "Erro: " . $stmt->error;
    }

    
    $stmt->close();
    $conn->close();

?>