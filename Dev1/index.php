<?php

    include_once 'Pessoa.php';

    $p = new Pessoa();
    $p->setNome("Zeca");

    echo $p->getNome();
    
?>