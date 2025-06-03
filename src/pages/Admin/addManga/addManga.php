<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pimba Mangas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav-bar.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>
    <?php include 'nav-bar.php'; ?>

    <div class="container">
        <form action="./salvar_manga.php" method="POST" enctype="multipart/form-data" class="form">

            <div class="image-upload">
                <label for="upload-image">
                    <img id="preview" src="../../../img/default-image.jpg" alt="Imagem">
                    <div class="edit-icon">🖉</div>
                </label>
                <input type="file" id="upload-image" name="upload-image" accept="image/*" hidden>
            </div>

           <div class="inputs">
             <input type="text" placeholder="Título Mangá/Manhua" name="titulo" required>

            <div class="row">
                <select name="genero" required>
                    <option disabled selected>Gênero</option>
                    <option>Ação</option>
                    <option>Aventura</option>
                    <option>Comédia</option>
                </select>

                <select name="tipo" required>
                    <option disabled selected>Tipo</option>
                    <option>Mangá</option>
                    <option>Manhua</option>
                </select>
            </div>

            <textarea placeholder="Resumo" name="resumo" required></textarea>

            <div class="row">
                <input type="number" placeholder="Primeiro Capítulo" name="primeiro" min="0" required>
                <input type="number" placeholder="Último Capítulo" name="ultimo" min="0" required>
            </div>

            <input type="text" placeholder="Nome da Scan" name="scan" required>
            <input type="text" placeholder="Descrição Scan" name="descricao_scan" required>

            
            <button type="submit">Adicionar Mangá/Manhua</button>
           </div>
        </form>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        const input = document.getElementById('upload-image');
        const preview = document.getElementById('preview');

        input.addEventListener('change', () => {
            const file = input.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = () => {
                    preview.src = reader.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>

</html>
