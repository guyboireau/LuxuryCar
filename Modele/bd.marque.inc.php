<?php

include_once "bd.inc.php";

function getMarqueByIdR($id) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from marque where idmarque=:id");
        $req->bindValue(':id', $id, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getMarque() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select idmodele, nommodele, nommarque, prix, image from modele Mo INNER JOIN marque Ma ON Mo.idmarque = Ma.idmarque;");
        $req->execute();

        while ($ligne = $req->fetch(PDO::FETCH_ASSOC)) {
            $resultat[] = $ligne;
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getMarqueByNom($nom) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select idmodele, nommodele, nommarque, prix, image from modele Mo INNER JOIN marque Ma ON Mo.idmarque = Ma.idmarque where nommarque like :nom;");
        $req->bindValue(':nom', "%" . $nom . "%", PDO::PARAM_STR);

        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

?>