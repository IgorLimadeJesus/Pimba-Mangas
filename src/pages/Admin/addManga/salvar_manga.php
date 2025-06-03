<?php
require_once '../../../scripts/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Upload da imagem
    $imgPath = 'img_uploads/default-image.jpg'; // Caminho padrão caso não haja upload
    if (isset($_FILES["upload-image"]) && $_FILES["upload-image"]["error"] == 0) {
        $pasta = "img_uploads/";
        $nomeTemp = $_FILES["upload-image"]["tmp_name"];
        $nomeFinal = uniqid() . "-" . basename($_FILES["upload-image"]["name"]);
        $destino = $pasta . $nomeFinal;

        if (move_uploaded_file($nomeTemp, $destino)) {
            $imgPath = $destino;
        }
    }

    $titulo = $_POST["titulo"] ?? '';
    $genero = $_POST["genero"] ?? '';
    $tipo = $_POST["tipo"] ?? '';
    $resumo = $_POST["resumo"] ?? '';
    $p_cap = $_POST["primeiro"] ?? 0;
    $u_cap = $_POST["ultimo"] ?? 0;
    $nome_scan = $_POST["scan"] ?? '';
    $desc_scan = $_POST["descricao_scan"] ?? '';

    // Insere no banco
    $sql = "INSERT INTO mangas (img_dir, titulo, genero, tipo, resumo, p_cap, u_cap, nome_scan, desc_scan) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssiiss", $imgPath, $titulo, $genero, $tipo, $resumo, $p_cap, $u_cap, $nome_scan, $desc_scan);

    if ($stmt->execute()) {
        echo "✅ Mangá cadastrado com sucesso!";
    } else {
        echo "❌ Erro ao salvar: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>