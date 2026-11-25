<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes Obra 1
    </title>

    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>

<?php include 'includes/header.php'; ?>

    <main class="conteudo_principal">
        <article class="painel_detalhe_obra">
            
            <!-- Expositor da obra recebe .borda-branca, .moldura-classica ou .totem-exposicao -->
            <div class="palco_obra expositor_obra moldura-classica">
                <img src="img_obras/obra1_1.jpg" alt="Rabisco" class="imagem_obra_principal">
                <div class="camada_expositor"></div>
            </div>

            <div class="ficha_obra">
                <div class="topo_ficha">
                    <div class="identificacao_obra">
                        <h1 class="titulo_obra_destaque">Rabisco</h1>
                        <p class="autor_obra_destaque">
                            Por: <a href="galeria.php" class="link_artista">Risco Rabisco</a>
                        </p>
                    </div>

                    <button class="btn_curtir" type="button" aria-label="Curtir obra">
                        <img src="icones/icon_coracao.svg" alt="Curtir">
                        <span>12</span>
                    </button>
                </div>

                <div class="bloco_descricao">
                    <span class="rotulo_campo">Descrição da Obra</span>
                    <p class="texto_sobre">
                        Um rabisco.
                    </p>
                </div>

                <div class="rodape_ficha">
                    <a href="galeria.php" class="btn_secundario"> Voltar à galeria</a>
                </div>
            </div>

        </article>
    </main>
