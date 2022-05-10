<?php 
include_once "$racine/modele/auth.inc.php";

if ($titre != "Vous n'êtes pas connecté, vous ne pouvez donc pas vous déconnecté !") {
    if (!isLoggedOn()){ ?>
        <div class="form-conteneur">
            <form action="./?action=cnx" method="POST">
                <input type="text" name="mail" placeholder="Email de connexion" required /><br /><br />
                <input type="password" name="mdp" placeholder="Mot de passe"  required /><br /><br />
                <input class="btn-cnx" type="submit" />
            </form>
        </div>
    <?php
    } else {
        echo "Vous êtes déjà connecté !"; }
}
else {
    ?> Connectez vous <a href="./?action=cnx">ICI</a> 
<?php } ?>

<br />
<!-- <a href="./?action=inscr">Inscription</a> -->



