<?php
// Função para listar diretórios
function listarDiretorios($dir) {
    return array_filter(glob($dir . '/*'), 'is_dir');
}

// Função para pegar o ícone do projeto, se existir
function pegarIcone($dir) {
    $iconePath = $dir . '/img/icone.png'; // Caminho da imagem dentro da pasta 'img'
    
    if (file_exists($iconePath)) {
        return "<img src='/projetos/" . basename($dir) . "/img/icone.png' alt='Ícone do " . basename($dir) . "'>";
    }
    return ''; // Se não houver ícone, retorna vazio
}
?>
