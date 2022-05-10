<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.insert.inc.php";

// recuperation des donnees GET, POST, et SESSION
if (isset($_POST['nom'])){
    $nom = $_POST['nom'];
    $Idmarque = $_POST['idmarque'];
    $carbu = $_POST['idcarburant'];
    $Vmax = $_POST['Vmax'];
    $cheveaux = $_POST['cheveaux'];
    $boite = $_POST['boitevitesse'];
    $annee = $_POST['annee'];
    $place = $_POST['place'];
    $tag = $_POST['tag'];
    $prix = $_POST['prix'];

    $result = getinsertByIdR($carbu,$Idmarque,$nom,$Vmax,$cheveaux,$boite,$annee,$place,$tag,$prix);

}

// appel du script de vue qui permet de gerer l'affichage des donnees
if (isLoggedOn()){
    $titre = "Inscription";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueInsert.php";
    include "$racine/vue/pied.html.php";
}
else {
    $titre = "Oups ! ";
    include "$racine/vue/entete.html.php";
    echo '<a href="./?action=cnx">Connectez-vous avant ! </a>';
    include "$racine/vue/pied.html.php";
}

?>