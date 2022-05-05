<?php

include_once "bd.utilisateur.inc.php";

// function inscription($mail, $mdp, $user) 
// {
//     $cnx = connexionPDO();
//     $req = $cnx->prepare("INSERT INTO user VALUES(''+$user+','+$mail+','+$mdp');");
//     $req->execute();
// }

function login($mail, $mdp) 
{
    if (!isset($_SESSION)) 
    {
        session_start();
    }

    $util = getUtilisateurByMail($mail);
    $mdpBD = $util["mdp"];

    // if (trim($mdpBD) == trim(crypt($mdp, $mdpBD))) 
    if (trim($mdpBD) == trim($mdp))
    {
        // le mot de passe est celui de l'utilisateur dans la base de donnees
        $_SESSION["mail"] = $mail;
        $_SESSION["mdp"] = $mdpBD;
    }
}

function logout() 
{
    if (!isset($_SESSION)) 
    {
        session_start();
    }

    unset($_SESSION["mail"]);
    unset($_SESSION["mdp"]);
    session_destroy();
}

function isLoggedOn() 
{
    $ret = false;
    
    if (!isset($_SESSION)) {
        session_start();
    }

    if (isset($_SESSION["mail"])) {
        $util = getUtilisateurByMail($_SESSION["mail"]);
        if ($util["email"] == $_SESSION["mail"] && $util["mdp"] == $_SESSION["mdp"]) {
            $ret = true;
        }
    }
    return $ret;
}

function getMailULoggedOn()
{
    if (isLoggedOn()){
        $ret = $_SESSION["mail"];
    }
    else {
        $ret = "";
    }
    return $ret;
        
}

?>