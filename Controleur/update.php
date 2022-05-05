<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.insert.inc.php";

// recuperation des donnees GET, POST, et SESSION
if(isset($_POST['attribut'])){
    $attribut = $_POST['attribut'];
}

if(isset($_POST['nom'])){
    $nom = $_POST['nom'];
    $attribut = $_POST['attribut'];
    $valeur = $_POST['valeur'];

    getupdate($nom,$attribut,$valeur);

}

//$insert = getinsertByIdR($carbu,$Idmarque,$nom,$Vmax,$cheveaux,$boite,$annee,$place,$cat);

// appel du script de vue qui permet de gerer l'affichage des donnees
if (isLoggedOn()){
    $titre = "Modification d'un véhicule";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueUpdate.php";
    include "$racine/vue/pied.html.php";
}
else {
    $titre = "Oups ! ";
    include "$racine/vue/entete.html.php";
    echo '<a href="./?action=cnx">Connectez-vous avant ! </a>';
    include "$racine/vue/pied.html.php";
}


?>