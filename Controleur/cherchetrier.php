<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.modele.inc.php";



// recuperation des donnees GET, POST, et SESSION

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

if (isset($_POST['tri']))
{   
    $tri = $_POST['tri'];
    $desc = $_POST['desc'];
    switch($desc)
    {
        case "descroissant": 
            switch($tri)
            {
                case "prix" :
                    $listeModele = getTrierPrixDesc();
                break;
                case "nommodele" :
                    $listeModele = getTrierNomDesc();
                break;
                case "cheveauxdin" :
                    $listeModele = getTrierChDesc();
                break;
                case "annee" :
                    $listeModele = getTrierAnneeDesc();
                break;
        
            }
        break;        
        case "croissant" :
            switch($tri)
            {
                case "prix" :
                    $listeModele = getTrierPrix();
                break;
                case "nommodele" :
                    $listeModele = getTrierNom();
                break;
                case "cheveauxdin" :
                    $listeModele = getTrierCh();
                break;
                case "annee" :
                    $listeModele = getTrierAnnee();
                break;
        
            }
        break;    
    }    
}

// else if (isset($_POST['tri']))
// {
//     $tri = $_POST['tri'];
//     $listeModele = getmodeleOrderBy($tri);
//     echo $tri;
// }


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des Modeles répertoriés";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueListeModele.php";
include "$racine/vue/pied.html.php";


?>