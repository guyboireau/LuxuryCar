<?php

include_once "bd.inc.php";

function getmodeleById($id) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select idmodele,idcarburant,Mo.idmarque,nommodele,vitessemax,cheveauxdin,boitevitesse,annee,nbplace,idtag,prix, image, nommarque from modele Mo inner join marque Ma where idmodele=:id");
        $req->bindValue(':id', $id, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getmodele() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select idmodele,nommodele, nommarque, prix, image from modele Mo left outer JOIN marque Ma ON Mo.idmarque = Ma.idmarque ;");
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

function getmodeleByNom($nom) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select idmodele, nommodele, nommarque, prix, image from modele Mo left outer JOIN marque Ma ON Mo.idmarque = Ma.idmarque  where nommodele like :nom;");
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

function getsupercar() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select nommodele,idmodele, nommarque, prix, image from modele Mo left outer JOIN marque Ma ON Mo.idmarque = Ma.idmarque  where idtag =1;");
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
function getSportive() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select nommodele, idmodele, nommarque, prix, image from modele Mo left outer JOIN marque Ma ON Mo.idmarque = Ma.idmarque  where idtag =2;");
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
function getModernes() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select nommodele, nommarque, idmodele, image, prix from modele Mo left outer JOIN marque Ma ON Mo.idmarque = Ma.idmarque  where idtag =3;");
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

function getAnciennes() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select nommodele,idmodele, nommarque, prix, image from modele Mo left outer JOIN marque Ma ON Mo.idmarque = Ma.idmarque  where idtag =4;");
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
function getLuxe() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select nommodele, idmodele, nommarque, prix, image from modele Mo left outer JOIN marque Ma ON Mo.idmarque = Ma.idmarque  where idtag =5;");
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
function getDrift() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select idmodele, nommodele, nommarque, prix, image from modele Mo left outer JOIN marque Ma ON Mo.idmarque = Ma.idmarque  where idtag =6;");
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


?>