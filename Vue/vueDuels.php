

<?php if(isset($value) && isset($value2))
 {  ?>
<div class="flex">
    <div class="conteneur" >
    <h2><?= $value['nommarque']." ". $value['nommodele'] ?></h2><br><br>
                <img src="<?= $value['image'] ?>" width="400px"><br><br><br>
                <b>Année de production :</b> <?= $value['annee'] ?> <br>
                <b>Prix HT :</b> <?= $value['prix'] ?>€ <br>
                <b>Vitesse maximal : </b> <?= $value['vitessemax'] ?> km/h <br>
                <b>Chevaux Din : </b><?= $value['cheveauxdin'] ?> <br>
                <b>Boite de vitesse :</b> <?= $value['boitevitesse'] ?> <br>
                <b>Nombre de place :</b>  
                <?= $value['nbplace'] ?>
                
 </div>
 <div class="conteneur">
            <h2><?= $value2['nommarque']." ". $value2['nommodele'] ?></h2><br><br>
                <img src="<?= $value2['image'] ?>" width="400px"><br><br><br>
                <b>Année de production :</b> <?= $value2['annee'] ?> <br>
                <b>Prix HT :</b> <?= $value2['prix'] ?>€ <br>
                <b>Vitesse maximal : </b> <?= $value2['vitessemax'] ?> km/h <br>
                <b>Chevaux Din : </b><?= $value2['cheveauxdin'] ?> <br>
                <b>Boite de vitesse :</b> <?= $value2['boitevitesse'] ?> <br>
                <b>Nombre de place :</b>  
                <?= $value2['nbplace'] ?>
 </div>
</div>          
            
<?php } ?>
<br><br><br><br>