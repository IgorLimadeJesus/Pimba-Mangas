<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="nav-bar.css">
    <title>Pimba Mangas</title>
</head>

<body>
    <header class="topbar">
        <div class="topbar-inner">
            <div class="logo">
                <a href="#"><img src="./src/img/Logo.png" alt="Logo" height="24" /></a>
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
    <hr class="divider">

    <div class="tittle">
        <h1>P.I.M.B.A MANGÁS</h1>
        <P>de P.I.M.B.A EVOLUTION</P>
    </div>
    <hr class="divider">
    <div class="latest-release-section">
        <h2>ÚLTIMOS LANÇAMENTOS</h2>
        <p class="subheading">ÚLTIMOS MANGÁS LANÇADOS</p>

        <div class="release-grid">
            <!-- Card -->
            <div class="release-card">
                <img src="./src/img/boku-no-pico-manga.png" alt="default" class="release-image" />
                <h3>Boku no Pico</h3>
                <p>Body text for whatever you'd like to say. Add main takeaway points, quotes, anecdotes, or even a very
                    very short story.</p>
                <div class="stars">⭐⭐⭐⭐⭐</div>
            </div>
            <div class="release-card">
                <img src="./src/img/dbz-maga.jpg" alt="default" class="release-image" />
                <h3>Dragon Ball Z</h3>
                <p>Body text for whatever you'd like to say. Add main takeaway points, quotes, anecdotes, or even a very
                    very short story.</p>
                <div class="stars">⭐⭐⭐⭐⭐</div>
            </div>
            <div class="release-card">
                <img src="./src/img/gurren-lagan.webp" alt="default" class="release-image" />
                <h3>Teggen Topa Gurren Lagan</h3>
                <p>Body text for whatever you'd like to say. Add main takeaway points, quotes, anecdotes, or even a very
                    very short story.</p>
                <div class="stars">⭐⭐⭐⭐⭐</div>
            </div>
            <div class="release-card">
                <img src="./src/img/jujutsu-manga.jpg" alt="default" class="release-image" />
                <h3>Jujutsu Kaisen</h3>
                <p>Body text for whatever you'd like to say. Add main takeaway points, quotes, anecdotes, or even a very
                    very short story.</p>
                <div class="stars">⭐⭐⭐⭐⭐</div>
            </div>
            <div class="release-card">
                <img src="./src/img/one-piece-manga.jpg" alt="default" class="release-image" />
                <h3>One Piece</h3>
                <p>Body text for whatever you'd like to say. Add main takeaway points, quotes, anecdotes, or even a very
                    very short story.</p>
                <div class="stars">⭐⭐⭐⭐⭐</div>
            </div>
            <div class="release-card">
                <img src="./src/img/naruto-manga.jpg" alt="default" class="release-image" />
                <h3>Naruto</h3>
                <p>Body text for whatever you'd like to say. Add main takeaway points, quotes, anecdotes, or even a very
                    very short story.</p>
                <div class="stars">⭐⭐⭐⭐⭐</div>
            </div>
            <div class="release-card">
                <img src="./src/img/one-piece-manga.jpg" alt="default" class="release-image" />
                <h3>One Piece</h3>
                <p>Body text for whatever you'd like to say. Add main takeaway points, quotes, anecdotes, or even a very
                    very short story.</p>
                <div class="stars">⭐⭐⭐⭐⭐</div>
            </div>
            <div class="release-card">
                <img src="./src/img/gurren-lagan.webp" alt="default" class="release-image" />
                <h3>Teggen Topa Gurren Lagan</h3>
                <p>Body text for whatever you'd like to say. Add main takeaway points, quotes, anecdotes, or even a very
                    very short story.</p>
                <div class="stars">⭐⭐⭐⭐⭐</div>
            </div>
        </div>

        <button class="more-content-btn">Clique aqui para mais</button>
    </div>
    <hr class="divider">
    <div class="most-read-section">
        <h2>Mais lidos</h2>
        <p class="subheading">Subheading</p>

        <div class="most-read-list">
            <!-- Item -->
            <div class="most-read-item">
                <img src="./src/img/frieren.jpg" alt="default" class="read-image" />
                <div class="read-content">
                    <h3>Sou Sou no Frieren</h3>
                    <p>Body text for whatever you'd like to say. Add main takeaway points, quotes, anecdotes, or even a
                        very very short story.</p>
                    <button class="chapter-button">Capítulo 000</button>
                </div>
            </div>

            <!-- Repetir os próximos -->
            <div class="most-read-item">
                <img src="./src/img/dungeon-meshi.jpg" alt="default" class="read-image" />
                <div class="read-content">
                    <h3>Dungeon Meshi</h3>
                    <p>Body text for whatever you'd like to say. Add main takeaway points, quotes, anecdotes, or even a
                        very very short story.</p>
                    <button class="chapter-button">Capítulo 000</button>
                </div>
            </div>

            <div class="most-read-item">
                <img src="./src/img/one-punch-man.jpg" alt="default" class="read-image" />
                <div class="read-content">
                    <h3>One Punch Man</h3>
                    <p>Body text for whatever you'd like to say. Add main takeaway points, quotes, anecdotes, or even a
                        very very short story.</p>
                    <button class="chapter-button">Capítulo 000</button>
                </div>
            </div>
        </div>

        <button class="more-content-btn">Clique aqui para mais</button>
    </div>

    <div class="overlay" id="overlay"></div>

    <div class="login-form" id="loginForm">
        <section>
            <button id="closeLogin" class="close-btn">×</button>
            <label>Logar na sua Conta</label>
            <form action="./src/scripts/login.php" method="POST">
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
            <form action="./src/scripts/cadastro.php" method="POST">
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

    <footer class="footer">
        <div class="footer-icons">
            <a href="#"><img src="./src/img/twitter.svg" alt="X" /></a>
            <a href="#"><img src="./src/img/instagram.svg" alt="Instagram" /></a>
            <a href="#"><img src="./src/img/youtube.svg" alt="YouTube" /></a>
        </div>
        <p class="footer-text">
            Copyright © 2022 Resurrection Scan | Designed for Resurrection scan – Todos os Direitos Reservados. Site
            criado com a intenção de divulgar traduções de fã (por fã). Os direitos autorais e marcas comerciais para a
            maioria dos outros materiais promocionais são mantidos por seus respectivos proprietários e sua utilização é
            permitida nos termos da cláusula de uso justo da Lei de Direitos Autorais.
        </p>
    </footer>


    <script src="./src/scripts/forms-script.js"></script>

</body>

</html>