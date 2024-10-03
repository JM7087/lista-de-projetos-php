<?php
require_once 'funcoes.php'; // Inclui o arquivo que contém as funções

$directory = __DIR__ . '/projetos'; // Caminho absoluto para a pasta 'projetos'

$projects = listarDiretorios($directory); // Utiliza a função do arquivo externo
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Projetos</title>

    <link rel="shortcut icon" type="imagex/png" href="img\icone.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- Link para o CSS externo -->
</head>
<body>

    <div class="links-container">
        <h2>Meus Projetos PHP</h2>
        <ul>
            <?php foreach ($projects as $project): ?>
                <li class="link-item">
                    <a href="/projetos/<?php echo basename($project); ?>/index.php" target="_blank">
                        <?php echo pegarIcone($project); // Exibe o ícone, se houver ?>
                          <?php
                            // Substitui tanto hífens (-) quanto underscores (_) por espaços
                            $nomeProjeto = str_replace(['-', '_'], ' ', basename($project));
                            echo $nomeProjeto;                            
                          ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <footer>
        <div align="center" class="credit">
            <a href="https://grupo.jm7087.com" class="cor-link-rodape">Grupo JM7087</a>
            © Copyright 2010-
            <script type="text/javascript">
                document.write(new Date().getFullYear());
            </script>
            . Todos os direitos reservados. Desenvolvido <span class="cor-nome-dev-rodape">João Marcos</span><span
                class="texto-rodape">.
        </div>
    </footer>

</body>
</html>
