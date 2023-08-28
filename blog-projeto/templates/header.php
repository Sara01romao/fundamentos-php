<?php

include_once("helpers/url.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ESTILOS DO PROJETOS -->
    <link rel="stylesheet" href="<?= $BASE_URL?>/css/styles.css">
    
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
   
    <title>Blog codar</title>
</head>

<body>
    <header>
          <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog codar">
          </a>

          <nav>
            <ul id="navbar">
                <li><a class="nav-link" href="<?= $BASE_URL ?>" >Home</a></li>
                <li><a class="nav-link" href="#" >Categorias</a></li>
                <li><a class="nav-link" href="#" >Sobre</a></li>
                <li><a class="nav-link" href="<?= $BASE_URL ?>contato.php" >Contato</a></li>
                
            </ul>
          </nav>

    </header>