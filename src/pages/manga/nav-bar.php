<link rel="stylesheet" href="./nav-bar.css" />

<header class="topbar">
    <div class="topbar-inner">
        <div class="logo">
            <a href="#"><img src="../../img/Logo.png" alt="Logo" height="24" /></a>
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
            <a href="./src/scripts/logout.php">Sair</a>

            <?php else: ?>
            <button class="btn-outline" id="btn-login">ENTRE</button>
            <button class="btn-filled" id="btn-register">CRIAR CONTA</button>
            <?php endif; ?>
        </div>
    </div>
</header>