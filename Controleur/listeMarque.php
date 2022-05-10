<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.marque.inc.php";

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeMarque = getMarque();

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des Modeles répertoriés";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueListeMarque.php";
include "$racine/vue/pied.html.php";


?>