
<br><br>
<style>
    table {
      border: solid;
      margin-left: 50px;
    }
  </style>

<table class="crud">
    <tbody>      
        <tr>
            <td>
                <form method="post" action="./?action=update">
                </td>
                <td>
                    <?php if(empty($_POST["attribut"])){ ?>
                        Choisir attribut à modifier :
                    </td>
                    <td>
                    <select name="attribut">
                        <option value="idcarburant">idcarburant</option>
                        <option value="idmarque">idmarque</option>
                        <option value="nommodele">nommodele</option>
                        <option value="vitessemax">vitessemax</option>
                        <option value="cheveauxdin">cheveauxdin</option> 
                        <option value="boitevitesse">boitevitesse</option>
                        <option value="annee">annee</option>
                        <option value="nbplace">nbplace</option>
                        <option value="idtag">idtag</option>
                        <option value="prix">prix</option>
                    </select>
                    </td>
                    <?php } else { 
                        ?> 
                        <td>
                            Choisir vehicule et noter nouvelle valeur :
                        </td>
                        <td>
                        <input type="text"  name="nom" placeholder="Nom du véhicule"> <?php
                        switch ($_POST["attribut"]){
                            case "idcarburant" : ?>
                                <select name="valeur">
                                    <option value="1">Essence</option>                                
                                    <option value="2">Gasoile</option>
                                    <option value="4">Hybride</option>
                                    <option value="3">Electrique</option>
                                </select>   <?php
                                break;
                            case "idmarque" : ?>
                                <select name="valeur">
                                    <option value="1">Audi</option>
                                    <option value="2">Bmw</option>
                                    <option value="3">Bugatti</option>
                                    <option value="4">Aston Martin</option>
                                    <option value="5">Honda</option>
                                    <option value="6">Koenigsegg</option>
                                    <option value="7">Lamborghini</option>
                                    <option value="8">Ferrari</option>
                                    <option value="9">Maserati</option>
                                    <option value="10">McLaren</option>
                                    <option value="11">Mercedes</option>
                                    <option value="12">Nissan</option>
                                    <option value="13">Porche</option>
                                    <option value="14">Tesla</option>
                                    <option value="15">Renault</option>
                                </select> <?php
                                break;
                            case "boitevitesse" : ?>
                                <select name="valeur">
                                    <option value="Mécanique">Mécanique</option>
                                    <option value="Automatique">Automatique</option> 
                                </select>  <?php
                                break;
                            case "idtag" : ?>
                                <select name="valeur">
                                    <option value="1">Supercars</option>
                                    <option value="2">Sportives</option>   
                                    <option value="3">Modernes</option>
                                    <option value="4">Anciennes</option>
                                    <option value="5">Luxe</option>
                                    <option value="6">Drift</option>
                                </select> <?php
                                break;
                            default :
                                ?> <input type="text"  name="valeur" placeholder="Nouvelle valeur"><?php
                                break;
                        }
                        
                        ?> <input type="hidden" name="attribut" value="<?= $_POST['attribut'] ?>"> <?php

                    }

                        ?>
                </td>
                <td>
                    <!-- <input type="text" name="valeur" placeholder="Nouvelle valeur"> -->
                    <input class="btn-crud" type="submit" value="Suivant"> 
                </form>
            </td>
        </tr>
    </tbody>
</table>
