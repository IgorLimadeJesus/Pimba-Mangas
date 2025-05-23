<?php
    session_start();
    require_once("conexao.php");

    $email = $_POST['email-login'];
    $senha = $_POST['senha-login'];

    $sql = "SELECT id, nome, senha FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
    $usuario = $result->fetch_assoc();
    
    if (password_verify($senha, $usuario['senha'])) {
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];
        header("Location: http://localhost/Pimba-Mangas/Index.php");
        exit();
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Usuário não encontrado.";
}

$stmt->close();
$conn->close();

?>