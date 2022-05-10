<form class="form-recherche" method="post" action="./?action=chercheMarque">
    <input class="barre-recherche"type="text"  name="nomMarque" placeholder="Rechercher une marque">
    <input class="btn-recherche" type="submit" value="chercher">
</form>
<br><br>

<div class="ensemble">
    <?php foreach($listeMarque as $key => $value): ?>
        <div class="vignette">
            <fieldset>
                <img  src="<?= $value['image'] ?>"> <br> 
                <?= $value['nommarque'] ?> <br>
                <form method="post" action="./?action=vueMod">
                    <input type="hidden" name="id" value="<?=  $value['idmodele'] ?>">
                    <input class ="voirplus" type="submit" value="Voir plus">
                </form>
            </fieldset>
        </div>
    <?php endforeach ?>
</div>
