<?php
session_start();
require_once 'includes/conexao.php';

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $telefone = trim($_POST['telefone'] ?? '');
    $senha = $_POST['senha'] ?? '';
    $tipo_conta = $_POST['tipo_conta'] ?? 'visitante';
    $codigo_convite = trim($_POST['codigo_convite'] ?? '');

    if (!in_array($tipo_conta, ['artista', 'visitante'], true)) {
        $tipo_conta = 'visitante';
    }

    if ($nome === '' || $email === '' || $senha === '') {
        $erro = 'Preencha nome, email e senha.';
    } elseif ($tipo_conta === 'artista') {
        $stmtConvite = $pdo->prepare("SELECT id FROM convites WHERE codigo = :codigo AND usado = 0 LIMIT 1");
        $stmtConvite->execute([':codigo' => $codigo_convite]);
        $convite = $stmtConvite->fetch();

        if (!$convite) {
            $erro = 'Código de convite inválido ou já utilizado.';
        }
    }

    if ($erro === '') {
        $stmtEmail = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email LIMIT 1");
        $stmtEmail->execute([':email' => $email]);

        if ($stmtEmail->fetch()) {
            $erro = 'Este email já está cadastrado.';
        } else {
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

            $stmtInsert = $pdo->prepare(
                "INSERT INTO usuarios (nome, email, telefone, senha, tipo_conta) VALUES (:nome, :email, :telefone, :senha, :tipo_conta)"
            );
            $stmtInsert->execute([
                ':nome' => $nome,
                ':email' => $email,
                ':telefone' => $telefone,
                ':senha' => $senhaHash,
                ':tipo_conta' => $tipo_conta
            ]);

            if ($tipo_conta === 'artista' && isset($convite['id'])) {
                $stmtUsado = $pdo->prepare("UPDATE convites SET usado = 1 WHERE id = :id");
                $stmtUsado->execute([':id' => $convite['id']]);
            }

            $_SESSION['usuario_id'] = $pdo->lastInsertId();
            $_SESSION['usuario_nome'] = $nome;
            $_SESSION['tipo_conta'] = $tipo_conta;

            header('Location: index.php');
            exit;
        }
    }
}
?>

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

        <?php if ($erro !== ''): ?>
            <p><?php echo htmlspecialchars($erro); ?></p>
        <?php endif; ?>
        
        <form class="formulario" action="cadastro.php" method="POST">
            <div class="grupo_campo">
                <label for="nome" class="rotulo_campo">Nome:</label>
                <input type="text" name="nome" required>
            </div>

            <div class="grupo_campo">
                <label for="email" class="rotulo_campo">Email:</label>
                <input type="email" name="email" required>
            </div>

            <div class="grupo_campo">
                <label for="telefone" class="rotulo_campo">Telefone:</label>
                <input type="text" name="telefone">
            </div>

            <div class="grupo_campo">
                <label for="senha" class="rotulo_campo">Senha:</label>
                <input type="password" name="senha" required>
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