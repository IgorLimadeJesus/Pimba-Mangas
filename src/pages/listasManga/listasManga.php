<?php

session_start();
require_once 'C:\xampp\htdocs\Pimba-Mangas\src\scripts\conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página de Mangás - Pimba Mangás</title>
    <link rel="stylesheet" href="listasManga.css">
    <link rel="stylesheet" href="nav-bar.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>

<header class="topbar">
        <div class="topbar-inner">
            <div class="logo">
                <a href="/"><img src="../../img/Logo.png" alt="Logo" height="24" /></a>
            </div>
            <nav class="nav-links">
                <a href="http://localhost/Pimba-Mangas/Index.php" class="active">HOME</a>
                <a href="#">GÊNEROS</a>
                <a href="#">CONTATO</a>
                <a href="http://localhost/Pimba-Mangas/src/pages/listasManga/listasManga.php">MANGÁS</a>
            </nav>
            <div class="nav-actions">
                <?php if (isset($_SESSION['usuario_nome'])): ?>
                <p>Bem-vindo,
                    <?= htmlspecialchars($_SESSION['usuario_nome']) ?>!
                </p>
                <a href="../../scripts/logout.php">Sair</a>

                <?php else: ?>
                <button class="btn-outline" id="btn-login">ENTRE</button>
                <button class="btn-filled" id="btn-register">CRIAR CONTA</button>
                <?php endif; ?>
            </div>
        </div>
    </header>

<main class="manga-container">
    <h1 class="titulo-pagina">Mangás em Destaque</h1>

    <div class="grid-mangas">
        <?php
        $sql = "SELECT * FROM mangas";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0):
            while ($manga = mysqli_fetch_assoc($result)):
        ?>
            <a href="/Pimba-Mangas/src/pages/manga/manga.php?id=<?= urlencode($manga['id']) ?>" class="card-manga">
                <img src="/Pimba-Mangas/src/pages/Admin/addManga/<?= htmlspecialchars($manga['img_dir']) ?>" alt="Capa de <?= htmlspecialchars($manga['titulo']) ?>">
                <h3><?= htmlspecialchars($manga['titulo']) ?></h3>
                <p><?= htmlspecialchars($manga['resumo']) ?></p>
            </a>
        <?php   
            endwhile;
        else:
            echo "<p>Nenhum mangá cadastrado ainda.</p>";
        endif;
        ?>
    </div>
</main>

<div class="overlay" id="overlay"></div>

    <div class="login-form" id="loginForm">
        <section>
            <button id="closeLogin" class="close-btn">×</button>
            <label>Logar na sua Conta</label>
            <form action="../../scripts/login.php" method="POST">
                <label>Email</label>
                <input type="email" name="email-login" placeholder="Digite seu E-mail" required>
                <label>Senha</label>
                <input type="password" name="senha-login" placeholder="Digite sua Senha" required>
                <a href="#">Esqueceu a senha?</a>
                <button type="submit" class="btn-filled-form" id="btn-login">Entrar</button>
            </form>
        </section>
    </div>

    <div class="login-form" id="RegisterForm">
        <section>
            <button id="closeRegister" class="close-btn">×</button>

            <label>Criar Conta</label>
            <form action="../../scripts/cadastro.php" method="POST">
                <label>Nome</label>
                <input type="text" name="nome-register" placeholder="Digite seu Nome" required>
                <label>Email</label>
                <input type="email" name="email-register" placeholder="Digite seu E-mail" required>
                <label>Senha</label>
                <input type="password" name="senha-register" placeholder="Digite sua Senha" required>
                <a href="#">Esqueceu a senha?</a>
                <button type="submit" class="btn-filled-form" id="btn-register">Entrar</button>
            </form>
        </section>
    </div>

    <?php include 'footer.php'; ?>

    <script>

        const btnLogin = document.getElementById('btn-login');
        const loginForm = document.getElementById('loginForm');
        const registerForm = document.getElementById('RegisterForm');
        const overlay = document.getElementById('overlay');
        const closeLogin = document.getElementById('closeLogin');
        const closeRegister = document.getElementById('closeRegister');
        const btnRegister = document.getElementById('btn-register'); // novo

        btnLogin.addEventListener('click', () => {
            loginForm.style.display = 'block';
            overlay.style.display = 'block';
        });

        btnRegister.addEventListener('click', () => {
            registerForm.style.display = 'block';
            overlay.style.display = 'block';
        });

        closeLogin.addEventListener('click', () => {
            loginForm.style.display = 'none';
            overlay.style.display = 'none';
        });

        closeRegister.addEventListener('click', () => {
            registerForm.style.display = 'none';
            overlay.style.display = 'none';
        });

        overlay.addEventListener('click', () => {
            loginForm.style.display = 'none';
            registerForm.style.display = 'none';
            overlay.style.display = 'none';
        });

    </script>

</body>
</html>
