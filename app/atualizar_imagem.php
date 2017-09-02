<?php

include_once 'constants.php';
include_once '../vendor/autoload.php';

use Aws\S3\S3Client;

if (count($_FILES)) {

  if (! USE_S3){
    $filename = '../uploads/original/quebracabeca.jpg';
    move_uploaded_file($_FILES['imagem']['tmp_name'], $filename);
  } else {
    
    $s3 = new S3Client(array(
      'credentials' => array(
        'key' => S3_ACCESS_KEY,
        'secret' => S3_SECRET_KEY,
      ),
      'region' => S3_REGION,
      'version' => 'latest'
    ));

    $s3->putObject(array(
      'Bucket'       => S3_BUCKET,
      'Key'          => S3_PATH . '/original/quebracabeca.jpg',
      'SourceFile'   => $_FILES['imagem']['tmp_name'],
      'ContentType'  => 'image/jpg',
      'ACL'          => 'public-read'
    ));
  }

	include 'gerar_quebracabeca.php';

	header('location: /index.php');
}

?>