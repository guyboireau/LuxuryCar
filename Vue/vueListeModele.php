<?php
if($titre == "Liste des Modeles répertoriés")
{
?>
<form class="form-recherche" method="post" action="./?action=chercheModele">
    <input class="barre-recherche" type="text"  name="nomModele" placeholder="rechercher un modèle">
    <!-- <select name="tri">
        <option value="prix">Prix Croissant</option>
        <option value="prix desc">Prix Décroissant</option>
        <option value="NOMMODELE" >Ordre Alphabétique Croissant</option>
        <option value="NOMMODELE desc">Ordre Alphabétique Décroissant</option>        
    </select> -->
    <input class="btn-recherche" type="submit" value="chercher">
    
</form>

<br><br>
<?php } ?>

<div class="ensemble">
<?php foreach($listeModele as $key => $value): ?>
    <div class="vignette">
    <fieldset>
        <img src="<?= $value['image'] ?>"> <br> 
        <?= $value['nommarque'] ?> | <?= $value['nommodele'] ?><br>
        <?=  $value['prix'] ?> € 
        <form method="post" action="./?action=vueMod">
            <input type="hidden" name="id" value="<?=  $value['idmodele'] ?>">
            <input class ="voirplus" type="submit" value="Voir plus">
        </form>
    </fieldset>
    </div>
<?php endforeach ?>
</div>
<br><br><br><br>

