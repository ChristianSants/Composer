<?php

    include_once('src/search.php');
    use christian\composer\search;

    $busca = new search();
    $resultado = $busca->getCep('94510020');

    print_r($resultado);

?>