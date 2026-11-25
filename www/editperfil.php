<!DOCTYPE html>
<html lang="ept-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>

    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <main class="conteudo_principal">
        <section class="caixa_formulario">
            <h2 class="titulo_formulario">Editar Perfil de Artista</h2>
            
            <form class="formulario">
                <div class="grupo_campo">
                    <label for="nome_artista" class="rotulo_campo">Nome de Exibição / Artístico</label>
                    <input type="text" id="nome_artista" class="campo_input" value="Nome do Artista" required>
                </div>

                <div class="grupo_campo">
                    <label for="foto_perfil" class="rotulo_campo">Alterar Foto de Perfil</label>
                    <input type="file" id="foto_perfil" class="campo_input_file">
                </div>

                <div class="grupo_campo">
                    <label for="bio_artista" class="rotulo_campo">Sobre Você</label>
                    <textarea id="bio_artista" class="campo_textarea" rows="4" placeholder="Descreva sua trajetória ou estilo"></textarea>
                </div>

                <button type="submit" class="botao_padrao">Salvar Alterações</button>
            </form>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    
</body>
</html>