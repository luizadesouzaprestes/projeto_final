<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>

    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>

<?php include 'includes/header.php'; ?>

<main class="conteudo_principal">

    <section class="cabecalho_galeria">
        <div class="info_artista">
            <a href="editperfil.php" class="btn_editar_perfil" title="Editar perdil">
                <img src="icones/icon_perfil.svg" alt="Perfil" class="icone_perfil">
            </a>
            <h1 class="titulo_galeria">RISCO RABISCO</h1>

        </div>

        <a href="cadastro_obra.php" class="btn_adicionar_obra" title="Adicionar obra">
            <img src="icones/icon_adicionar.svg" alt="Adicionar" class="icone_adicionar">
        </a>
    </section>

    <section class="grid_galeria">

        <!-- OBRA 1 -->

        <div class="card_obra">
            <a href="detalhes_obra.php" class="link_obra">
                <img src="img_obras/obra1_1.jpg" class="imagem_obra">
            </a>
            <div class="rodape_card">
                <h2 class="nome_obra">Rabisco</h2>
                <button class="btn_curtir" type="button">
                    <a href="entrar.php" title="Entrar">
                    <img src="icones/icon_coracao.svg" alt="Curtir" class="icone_curtir">
                    </a>
                    <span class="contador_curtidas">0</span>
                </button>
            </div>
        </div>

        <!-- OBRA 2 -->

        <div class="card_obra">
            <a href="detalhes_obra.php" class="link_obra">
                <img src="img_obras/obra2_1.jpg" class="imagem_obra">
            </a>
            <div class="rodape_card">
                <h2 class="nome_obra">Linha</h2>
                <button class="btn_curtir" type="button">
                    <a href="entrar.php" title="Entrar">
                    <img src="icones/icon_coracao.svg" alt="Curtir" class="icone_curtir">
                    </a>
                    <span class="contador_curtidas">0</span>
                </button>
            </div>
        </div>

        <!-- OBRA 3 -->

        <div class="card_obra">
            <a href="detalhes_obra.php" class="link_obra">
                <img src="img_obras/obra3_1.jpg" class="imagem_obra">
            </a>
            <div class="rodape_card">
                <h2 class="nome_obra">Mancha</h2>
                <button class="btn_curtir" type="button">
                    <a href="entrar.php" title="Entrar">
                    <img src="icones/icon_coracao.svg" alt="Curtir" class="icone_curtir">
                    </a>
                    <span class="contador_curtidas">0</span>
                </button>
            </div>
        </div>
        

    </section>

</main>

<?php include 'includes/footer.php'; ?>

</body>
</html>