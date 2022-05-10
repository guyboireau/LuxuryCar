<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.modele.inc.php";

// recuperation des donnees GET, POST, et SESSION

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

if (isset($_POST['id']) && isset($_POST['id']))
{
    $id = $_POST['id'];
    $value = getUnmodeleByNom($id);
    $id2 = $_POST['id2'];
    $value2 = getUnmodeleByNom($id2);
}

// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des Modeles répertoriés";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueChoixDuels.php";
include "$racine/vue/vueDuels.php";
include "$racine/vue/pied.html.php";


?>