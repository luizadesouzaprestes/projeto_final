<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Obra</title>

    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>

</head>
<body>

<?php include 'includes/header.php'; ?>

<main class="conteudo_principal">
    <section class="caixa_formulario">
        <h3 class="titulo_formulario">Adicionar Nova Obra</h3>
        
        <form class="formulario" action="cadastro_obra.php" method="POST" enctype="multipart/form-data">
    <div class="grupo_campo">
        <label for="titulo_obra" class="rotulo_campo">Nome da Obra</label>
        <input type="text" id="titulo_obra" name="titulo" class="campo_input" placeholder="Ex: Estudo de Formas" required>
    </div>

    <div class="grupo_campo">
        <label for="imagem_obra_input" class="rotulo_campo">Selecione a Imagem (PNG)</label>
        <input type="file" id="imagem_obra_input" name="arquivo_obra" accept="image/png" class="campo_input_file" required>
    </div>

    <div class="grupo_campo">
        <label for="descricao_obra" class="rotulo_campo">Descrição da Obra</label>
        <textarea id="descricao_obra" name="descricao" class="campo_textarea" rows="4" placeholder="Descreva o conceito, técnica ou contexto."></textarea>
    </div>

    <div class="grupo_campo">
        <span class="rotulo_campo">Forma de Exposição</span>
        <div class="opcoes_tipo_conta opcoes_exposicao">
            <label class="opcao_card">
                <input type="radio" name="estilo_exposicao" value="borda-branca" checked>
                <span class="conteudo_card">Sem Moldura</span>
            </label>

            <label class="opcao_card">
                <input type="radio" name="estilo_exposicao" value="moldura-1">
                <span class="conteudo_card">Moldura 1</span>
            </label>

            <label class="opcao_card">
                <input type="radio" name="estilo_exposicao" value="moldura-2">
                <span class="conteudo_card">Moldura 2</span>
            </label>

            <label class="opcao_card">
                <input type="radio" name="estilo_exposicao" value="totem-1">
                <span class="conteudo_card">Totem 1</span>
            </label>

            <label class="opcao_card">
                <input type="radio" name="estilo_exposicao" value="totem-2">
                <span class="conteudo_card">Totem 2</span>
            </label>
        </div>
    </div>

    <button type="submit" class="botao_padrao">Publicar Obra</button>
</form>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

</body>
</html>