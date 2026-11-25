<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sair</title>

    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>


<body>

<?php include 'includes/header.php'; ?>

<main class="conteudo_principal">
        <section class="caixa_formulario">
            <h1 class="titulo_formulario">Encerrar Sessão</h1>
            
            <p class="texto_sobre" style="text-align: center; margin-bottom: 2rem;">
                Tem certeza de que deseja sair da sua conta?
            </p>

            <div class="botoes_formulario">
                <a href="index.php" class="btn_secundario">Cancelar</a>
                <a href="entrar.php" class="btn_submit" style="text-decoration: none;">Sair</a>
            </div>
        </section>
    </main>

<?php include 'includes/footer.php'; ?>

</body>

</html>