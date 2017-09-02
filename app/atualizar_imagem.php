<?php

if (count($_FILES)) {
	$filename = '../uploads/original/quebracabeca.jpg';
	move_uploaded_file($_FILES['imagem']['tmp_name'], $filename);

	include 'gerar_quebracabeca.php';

	header('location: /index.php');
}

/**
array (size=1)
  'imagem' => 
    array (size=5)
      'name' => string 'imagens-pinguins.jpg' (length=20)
      'type' => string 'image/jpeg' (length=10)
      'tmp_name' => string 'C:\tools\xampp\tmp\phpC7C8.tmp' (length=30)
      'error' => int 0
      'size' => int 103598
*/

?>