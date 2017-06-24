<?php

$resultado = array();
for($i=0; $i<$pecas_linhas*$tamanho_peca; $i+=$tamanho_peca){
    $i1 = $i+$tamanho_peca;

    for($j=0; $j<$pecas_colunas*$tamanho_peca; $j+=$tamanho_peca){
        $j1 = $j + $tamanho_peca;
        $resultado[] = array($j, $j1, $i, $i1);
    }
}

IF(TESTING){
    if(count($resultado) == 48){
        echo "Tem o tamanho desejado. ";
    }else{
        echo "Nao tem o tamanho desejado. ";
    }

    if($resultado[5] == array(500,600,0,100)){
        echo "Array na posicao 5 OK. ";
    }else{
        echo "Erro no array na posicao 5. ";
    }

    if($resultado[25] == array(100,200,300,400)){
        echo "Array na posicao 25 OK. ";
    }else{
        echo "Erro no array na posicao 25. ";
    }

    if($resultado[32] == array(0, 100, 400, 500)){
        echo "Array na posicao 33 OK. ";
    }else{
        echo "Erro no array na posicao 33. ";
    }
}


?>