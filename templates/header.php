<?php
    include_once("helpers/url.php");
    include_once("data/posts.php");
    include_once("data/categories.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platinum Slime Studios</title>
    <!-- Estilos do projeto -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <a hreaf="<?= $BASE_URL ?>" id="logo"> 
            <img src="<?= $BASE_URL ?>/img/logo.png" alt="Platinum Slime Studios">
        </a>
        <nav>
            <ul id="navbar">
               <li><a href="index.php" class="nav-link">Home</a></li> 
               <li><a href="#" class="nav-link">Categorias</a></li> 
               <li><a href="#" class="nav-link">Sobre</a></li> 
               <li><a href="contact.php" class="nav-link">Contato</a></li> 
            </ul>
        </nav>
    </header>
