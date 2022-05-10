<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.insert.inc.php";
?>

<script>
function clicked(e)
{
    if(!confirm('Êtes-vous sûr de supprimer ce véhicule ?')) {
        e.preventDefault();
    }
}
</script>

<?php
// recuperation des donnees GET, POST, et SESSION

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

if (isset($_POST['nom']))
{
    $nom = $_POST['nom'];

    $recupid = RecupIdparNom($nom)['idmodele'];

    $result = getdeleteByID($recupid);
}

// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
if (isLoggedOn()){
    $titre = "Suppression d'un modèle";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueDelete.php";
    include "$racine/vue/pied.html.php";
}
else {
    $titre = "Oups ! ";
    include "$racine/vue/entete.html.php";
    echo '<a href="./?action=cnx">Connectez-vous avant ! </a>';
    include "$racine/vue/pied.html.php";
}

?>