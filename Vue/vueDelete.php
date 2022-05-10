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
    <tr>
      <td>
        <form method="post" action="./?action=delete">
          <input type="text"  name="nom" placeholder="Nom du véhicule">
          <input class="btn-crud" type="submit" value="Supprimer" onclick="clicked(event)">
        </form>
      </td>           
    </tr>
  </tbody>
</table>
