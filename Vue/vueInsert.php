<?php 
if(isset($result))
    echo $result; 
?>
<br><br>
<style>
    table {
      border: solid;
      margin-left: 50px;
    }
  </style>

<table class="crud">
    <tbody>      
        <form method="post" action="./?action=insert">
                <tr>
                    <td>
                        <input type="text" name="nom" placeholder="Nom du véhicule">
                    </td>
                    <td>
                        <select name="idcarburant">
                            <option value="1">Essence</option>                                
                            <option value="2">Gasoile</option>
                            <option value="4">Hybride</option>
                            <option value="3">Electrique</option>
                        </select>                       
                    </td>
                    <td>
                        <select name="idmarque">
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
                            <option value="13">Porsche</option>
                            <option value="14">Tesla</option>
                            <option value="15">Renault</option>
                        </select>
                    </td>
                    <td>                        
                        <input type="text" name="Vmax" placeholder="Vitesse maximal">                        
                    </td>
                    <td>                        
                        <input type="text" name="cheveaux" placeholder="Nombre de cheveaux">                      
                    </td>
                    <td>
                        <input type="text" name="place" placeholder="Nombre de place">
                    </td>
                    <td>
                        <input type="text" name="annee" placeholder="Année">
                    </td>
                    <td>
                        <select name="boitevitesse">
                            <option value="Mécanique">Mécanique</option>
                            <option value="Automatique">Automatique</option> 
                        </select>                       
                    </td>
                    <td>
                        <select name="tag">
                            <option value="1">Supercars</option>
                            <option value="2">Sportives</option>   
                            <option value="3">Modernes</option>
                            <option value="4">Anciennes</option>
                            <option value="5">Luxe</option>
                            <option value="6">Drift</option>
                        </select> 
                    </td>
                    <td>
                        <input type="text" name="prix" placeholder="Prix">
                    </td>
                    <td>
                        <input class="btn-crud" type="submit" value="Insérer">
                    </td>
                </tr>      
        </form>   
    </tbody>
</table>

