<?php

include_once 'constants.php';
include_once '../vendor/autoload.php';

use Aws\S3\S3Client;

$imagem_base = imagecreatetruecolor($tamanho_peca, $tamanho_peca);

if (! USE_S3) {
    if (! file_exists('../uploads/imagens')) {
        mkdir('../uploads/imagens');
    }
    $imagem_origem = imagecreatefromjpeg('../uploads/original/quebracabeca.jpg');
}else{
    $imagem_origem = imagecreatefromjpeg(S3_ENDPOINT . '/' . S3_PATH . '/original/quebracabeca.jpg');

    $s3 = new S3Client(array(
      'credentials' => array(
        'key' => S3_ACCESS_KEY,
        'secret' => S3_SECRET_KEY,
      ),
      'region' => S3_REGION,
      'version' => 'latest'
    ));
}

foreach($resultado as $posicao => $quadro){
    imagecopy($imagem_base, $imagem_origem, 0, 0, $quadro[0], $quadro[2], $tamanho_peca, $tamanho_peca);
    
    $filename = sprintf('../uploads/imagens/%s.jpg', $posicao+1);
    imagejpeg($imagem_base, $filename);

    if (USE_S3) {
        $s3->putObject(array(
          'Bucket'       => S3_BUCKET,
          'Key'          => S3_PATH . '/imagens/' . ($posicao+1) . 'jpg',
          'SourceFile'   => $filename,
          'ContentType'  => 'image/jpg',
          'ACL'          => 'public-read'
        ));

        @unlink($filename);
    }
}

imagedestroy($imagem_base);
imagedestroy($imagem_origem);

?>