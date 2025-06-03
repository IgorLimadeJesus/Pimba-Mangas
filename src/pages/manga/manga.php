<?php
session_start();
require_once '../../scripts/conexao.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT * FROM mangas WHERE id = $id";
$result = mysqli_query($conn, $sql);
$manga = mysqli_fetch_assoc($result);

if (!$manga) {
    echo "Mangá não encontrado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($manga['titulo']) ?> - Pimba Mangás</title>
    <link rel="stylesheet" href="./manga.css">
</head>
<body>

<?php include 'nav-bar.php'; ?>


<main class="detalhe-manga">
    <div class="container-manga">
        <div class="imagem-manga">
            <img src="/Pimba-Mangas/src/pages/Admin/addManga/<?= htmlspecialchars($manga['img_dir']) ?>" alt="Capa de <?= htmlspecialchars($manga['titulo']) ?>">
        </div>

        <div class="info-manga">
            <h1><?= htmlspecialchars($manga['titulo']) ?></h1>

            <div class="generos">
                <?php
                    $generos = explode(',', $manga['genero']);
                    foreach ($generos as $genero) {
                        echo '<span>' . htmlspecialchars(trim($genero)) . '</span>';
                    }
                ?>
            </div>

            <p class="resumo"><?= nl2br(htmlspecialchars($manga['resumo'])) ?></p>

            <div class="capitulos">
                <input type="text" readonly value="Cap. <?= htmlspecialchars($manga['p_cap']) ?>">
                <input type="text" readonly value="Cap. <?= htmlspecialchars($manga['u_cap']) ?>">
            </div>

            <button class="btn-leitura">COMEÇAR LEITURA</button>

            <div class="scan-info">
                <summary><strong><?= htmlspecialchars($manga['nome_scan']) ?></strong></summary>
                <p><?= nl2br(htmlspecialchars($manga['desc_scan'])) ?></p>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
