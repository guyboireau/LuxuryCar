

<h2><?= $value['nommarque']." ". $value['nommodele'] ?></h2><br><br>

<div id="detail">
    <img src="<?= $value['image'] ?>" id="detailIMG"><br><br><br>
    <b>Année de production :</b> <?= $value['annee'] ?> <br>
    <b>Prix HT :</b> <?= $value['prix'] ?>€ <br>
   <b>Vitesse maximal : </b> <?= $value['vitessemax'] ?> km/h <br>
    <b>Chevaux Din : </b><?= $value['cheveauxdin'] ?> <br>
    <b>Boite de vitesse :</b> <?= $value['boitevitesse'] ?> <br>
    <b>Nombre de place :</b>  
    <?= $value['nbplace'] ?>
</div>
<br><br><br><br>