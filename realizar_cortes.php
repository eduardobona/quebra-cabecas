<?php

if(TESTING){
    if (! file_exists('imagens')) {
        echo "Pasta imagens não existe";
    }
}

$imagem_origem = imagecreatefromjpeg('quebracabeca.jpg');
$imagem_base = imagecreatetruecolor($tamanho_peca, $tamanho_peca);

if (! file_exists('imagens')) {
    mkdir('imagens');
}

foreach($resultado as $posicao => $quadro){
    imagecopy($imagem_base, $imagem_origem, 0, 0, $quadro[0], $quadro[2], $tamanho_peca, $tamanho_peca);

    $filename = sprintf('imagens/%s.jpg', $posicao+1);
    imagejpeg($imagem_base, $filename);
}

imagedestroy($imagem_base);
imagedestroy($imagem_origem);

if (TESTING) {
    $imagem1 = file_get_contents('test_imagens/1.jpg');
    $imagem2 = file_get_contents('imagens/1.jpg');

    if($imagem1 != $imagem2){
        echo "Imagem 1.jpg não esta igual desejado";
    }
}

?>