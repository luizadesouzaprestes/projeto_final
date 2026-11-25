<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>

    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <main class="conteudo_principal">
    <section class="caixa_formulario">
        <h2 class="titulo_formulario">Login</h2>
        
        <form class="formulario">
            <div class="grupo_campo">
                <label for="email_login" class="rotulo_campo">Email:</label>
                <input type="email" id="email_login" class="campo_input" placeholder="seuemail@exemplo.com" required>
            </div>

            <div class="grupo_campo">
                <label for="senha_login" class="rotulo_campo">Senha:</label>
                <input type="password" id="senha_login" class="campo_input" placeholder="••••••••" required>
            </div>

            <!-- Área de erro conforme a validação -->
            <div class="mensagem_erro" id="mensagem_erro_login" style="display: none;">
                Email ou senha incorretos.
            </div>

            <div class="acoes_formulario">
                <a href="cadastrO_usuario.php" class="botao_pesquisa btn_secundario">Não possuo conta / fazer cadastro</a>
                <button type="submit" class="botao_padrao">Entrar</button>
            </div>
        </form>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
    
</body>
</html>