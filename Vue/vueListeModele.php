<?php
if($titre == "Liste des Modeles répertoriés")
{
?>
<form class="form-recherche" method="post" action="./?action=chercheModele">
    <input class="barre-recherche" type="text"  name="nomModele" placeholder="rechercher un modèle">
  
    <input class="btn-recherche" type="submit" value="chercher">
    
</form>
<form class="form-recherche" method="post" action="./?action=cherchetrier"> 
<select class="barre-recherche"name="tri">
        <option value="prix">Prix</option>                                
        <option value="nommodele">Nom</option>
        <option value="cheveauxdin">Cheveaux</option>
        <option value="annee">Année</option>
</select>
<select class="barre-recherche"name="desc">
        <option value="croissant">Croissant</option>                                
        <option value="descroissant">Décroissant</option>       
</select>
<input class="btn-recherche" type="submit" value="Trier">
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

