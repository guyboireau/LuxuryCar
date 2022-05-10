<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "listeModele.php";
    $lesActions["listeMo"] = "listeModele.php";
    $lesActions["listeMa"] = "listeMarque.php";
    $lesActions["listeSup"] = "listeSupercars.php";
    $lesActions["listeSpo"] = "listeSportives.php";
    $lesActions["listeMod"] = "listeModernes.php";
    $lesActions["listeAnc"] = "listeAnciennes.php";
    $lesActions["listeLux"] = "listeLuxe.php";
    $lesActions["listeDri"] = "listeDrift.php";
    
    $lesActions["vueMod"] = "modele.php";
    $lesActions["duels"] = "duels.php";
    $lesActions["choixduels"] = "choixduels.php";


    $lesActions["cnx"] = "cnx.php";
    $lesActions["deco"] = "deco.php";
    // $lesActions["inscr"] = "inscr.php";

    $lesActions["insert"] = "insert.php";  
    $lesActions["delete"] = "delete.php";  
    $lesActions["update"] = "update.php"; 
    
    $lesActions["chercheModele"] = "chercheModele.php";
    $lesActions["chercheMarque"] = "chercheMarque.php";
    $lesActions["cherchetrier"] = "cherchetrier.php";

    $lesActions["modele"] = "modele.php";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}

?>