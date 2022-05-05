<?php

if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/modele/auth.inc.php";

// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["mail"]) && isset($_POST["mdp"])){
    $mail = $_POST["mail"];
    $mdp = $_POST["mdp"];

    login($mail,$mdp);

    if(isLoggedOn())
    {
        $title = "Connecté";
        include "$racine/controleur/listeModele.php";
    }
    else
    {
        $titre = "Authentification";
        include "$racine/vue/entete.html.php";
        include "$racine/vue/vueAuthentification.php";
        include "$racine/vue/pied.html.php";
    }
}
else
{
    // on affiche le formulaire de connexion
    $titre = "Authentification";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueAuthentification.php";
    include "$racine/vue/pied.html.php";
}

?>