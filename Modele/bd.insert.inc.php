<?php

include_once "bd.inc.php";
function getinsertByIdR($carbu,$Idmarque,$nom,$Vmax,$cheveaux,$boite,$annee,$place,$cat,$prix) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("insert into modele (idcarburant,idmarque,nommodele,vitessemax,cheveauxdin,boitevitesse,annee,nbplace,idtag,prix,image)
        values(:carbu,:idmarque,:nom,:Vmax,:cheveaux,:boite,:annee,:place,:cat,:prix,'images/vdebase.jpg');");        
        $req->bindValue(':carbu', $carbu, PDO::PARAM_INT);
        $req->bindValue(':idmarque', $Idmarque, PDO::PARAM_INT);
        $req->bindValue(':nom', $nom, PDO::PARAM_STR);
        $req->bindValue(':Vmax', $Vmax, PDO::PARAM_INT);
        $req->bindValue(':cheveaux', $cheveaux, PDO::PARAM_INT);
        $req->bindValue(':boite', $boite, PDO::PARAM_STR);
        $req->bindValue(':annee', $annee, PDO::PARAM_INT);
        $req->bindValue(':place', $place, PDO::PARAM_INT);
        $req->bindValue(':cat', $cat, PDO::PARAM_INT);
        $req->bindValue(':prix', $prix, PDO::PARAM_INT);

        $req->execute();

        $result = 'Insertion réussite';

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        $result = "Echec de l'insertion";
        die();
    }
    return $result;
}
function RecupIdparNom($nom)
{
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("select idmodele from modele where NOMMODELE = :nom;");        
        $req->bindValue(':nom', $nom, PDO::PARAM_STR); 
        
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    }
    catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }    
    return $resultat;
}

function getdeleteByID($id)
{
    try{        
        $cnx = connexionPDO();
        $req = $cnx->prepare("delete from modele where IDMODELE = :id;");        
        $req->bindValue(':id', $id, PDO::PARAM_INT);
      
        $req->execute();

        $result = 'Suppression réussite';
    }
    catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        $result = "Echec de la suppression";
        die();
    }    
    return $result;
}
function getupdate($nom,$attribut,$valeur)
{
    try{
        $cnx = connexionPDO();

        $id = RecupIdparNom($nom)['idmodele'];
        switch ($attribut) {
            case "idcarburant" :
                $req = $cnx->prepare("update modele set idcarburant = :valeur where idmodele = :id");
                $req->bindValue(':id', $id, PDO::PARAM_INT);
                $req->bindValue(':valeur', $valeur, PDO::PARAM_INT);
                break;
            case "idmarque" :
                $req = $cnx->prepare("update modele set idmarque = :valeur where idmodele = :id");
                $req->bindValue(':id', $id, PDO::PARAM_INT);
                $req->bindValue(':valeur', $valeur, PDO::PARAM_INT);
                break;
            case "nommodele" :
                $req = $cnx->prepare("update modele set nommodele = :valeur where idmodele = :id");
                $req->bindValue(':id', $id, PDO::PARAM_INT);
                $req->bindValue(':valeur', $valeur, PDO::PARAM_STR);
                break;
            case "vitessemax" :
                $req = $cnx->prepare("update modele set vitessemax = :valeur where idmodele = :id");
                $req->bindValue(':id', $id, PDO::PARAM_INT);
                $req->bindValue(':valeur', $valeur, PDO::PARAM_INT);
                break;
            case "cheveauxdin" :
                $req = $cnx->prepare("update modele set cheveauxdin = :valeur where idmodele = :id");
                $req->bindValue(':id', $id, PDO::PARAM_INT);
                $req->bindValue(':valeur', $valeur, PDO::PARAM_INT);
                break;
            case "boitevitesse" :
                $req = $cnx->prepare("update modele set boitevitesse = :valeur where idmodele = :id");
                $req->bindValue(':id', $id, PDO::PARAM_INT);
                $req->bindValue(':valeur', $valeur, PDO::PARAM_STR);
                break;
            case "annee" :
                $req = $cnx->prepare("update modele set annee = :valeur where idmodele = :id");
                $req->bindValue(':id', $id, PDO::PARAM_INT);
                $req->bindValue(':valeur', $valeur, PDO::PARAM_INT);
                break;
            case "nbplace" :
                $req = $cnx->prepare("update modele set nbplace = :valeur where idmodele = :id");
                $req->bindValue(':id', $id, PDO::PARAM_INT);
                $req->bindValue(':valeur', $valeur, PDO::PARAM_STR);
                break;
            case "idtag" :
                $req = $cnx->prepare("update modele set idtag = :valeur where idmodele = :id");
                $req->bindValue(':id', $id, PDO::PARAM_INT);
                $req->bindValue(':valeur', $valeur, PDO::PARAM_INT);
                break;
            case "prix" :
                $req = $cnx->prepare("update modele set prix = :valeur where idmodele = :id");
                $req->bindValue(':id', $id, PDO::PARAM_INT);
                $req->bindValue(':valeur', $valeur, PDO::PARAM_INT);
                break;
        }

        $req->execute();

    }
    catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }    
}
?>