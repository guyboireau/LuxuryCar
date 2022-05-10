<?php
include_once "$racine/modele/auth.inc.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="vue/css/style.css">
    <title>Luxury Cars</title>
</head>

<body>
        <!-- barre de navigation -->
        <nav> 
  
                <label class="logo"><a href="./?action=defaut">Luxury Cars</a></label> 

                <?php
                if (isLoggedOn()){ ?>
                <ul>
                        <li><a class="sous_entete" href="./?action=update">Modifier</a></li>
                        <li><a class="sous_entete" href="./?action=delete">Supprimer</a></li>
                        <li><a class="sous_entete" href="./?action=insert">Inserer</a></li>
                </ul>        
                <?php } ?>
                <ul>
                        <li><a class="sous_entete" href="./?action=cnx">Connexion</a></li>
                        <li><a class="sous_entete" href="./?action=deco">Déconnexion</a></li>
                </ul>      
        </nav>

        <!-- Carousel d'image -->
        <section>
        <div class="container">
                <div class="wrapper">
                        <img class="carousel" src="vue/css/img1">
                        <img class="carousel" src="vue/css/img2">
                        <img class="carousel" src="vue/css/img3">
                        <img class="carousel" src="vue/css/img1 copy"> 
                </div>
        </div>            
        </section>

        <!-- Menu de recherche des voitures -->
        <nav class="menu">
                <ul>
                        <li><a href="./?action=listeSup">Supercars</a></li>
                        <li><a href="./?action=listeSpo">Sportives</a></li>
                        <li><a href="./?action=listeMod">Modernes</a></li>
                        <li><a href="./?action=listeAnc">Anciennes</a></li>
                        <li><a href="./?action=listeLux">Luxe</a></li>
                        <li><a href="./?action=listeDri">Drift</a></li>
                        <li><a href="./?action=listeMo">Rechercher Modèle</a></li>
                        <li><a href="./?action=listeMa">Rechercher Marque</a></li>
                        <li><a href="./?action=choixduels">Duels</a></li>
                </ul>
        </nav>

        
<!-- le reste de la page -->    
<div class="global">
        <h2 class="titre"> <?= $titre ?> </h2>
        <br><br>
