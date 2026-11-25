<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>

    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <main class="conteudo_principal">
    <section class="caixa_formulario">
        <h2 class="titulo_formulario">Cadastro</h2>
        
        <form class="formulario">
            <div class="grupo_campo">
                <label for="nome" class="rotulo_campo">Nome:</label>
                <input type="text" id="nome" class="campo_input" required>
            </div>

            <div class="grupo_campo">
                <label for="email" class="rotulo_campo">Email:</label>
                <input type="email" id="email" class="campo_input" required>
            </div>

            <div class="grupo_campo">
                <label for="telefone" class="rotulo_campo">Telefone:</label>
                <input type="tel" id="telefone" class="campo_input" required>
            </div>

            <div class="grupo_campo">
                <label for="senha" class="rotulo_campo">Senha:</label>
                <input type="password" id="senha" class="campo_input" required>
            </div>

            <!-- TIPO DE CONTA -->
            <div class="grupo_campo">
                <span class="rotulo_campo">Sou:</span>
                <div class="opcoes_tipo_conta">
                    <label class="opcao_card">
                        <input type="radio" name="tipo_usuario" value="artista" id="radio_artista" checked>
                        <span class="conteudo_card">Artista</span>
                    </label>
                    
                    <label class="opcao_card">
                        <input type="radio" name="tipo_usuario" value="visitante" id="radio_visitante">
                        <span class="conteudo_card">Visitante</span>
                    </label>
                </div>
            </div>

            <!-- CAMPO CÓDIGO DE CONVITE (Aparece se for Artista) -->
            <div class="grupo_campo" id="campo_codigo_convite" style="display: none;">
                <label for="codigo_convite" class="rotulo_campo">Código de Convite:</label>
                <input type="text" id="codigo_convite" class="campo_input">
            </div>

            <!-- MENSAGEM DE ERRO (Visível após validação php) -->
            <p class="mensagem_erro" style="display: none;">Preencha todos os campos corretamente.</p>

            <div class="botoes_formulario">
                <a href="entrar.html" class="botao_pesquisa btn_secundario">Já possuo conta / fazer login</a>
                <button type="submit" class="botao_padrao">Cadastrar</button>
            </div>
        </form>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
    
</body>
</html>