DROP DATABASE IF EXISTS bdVoitureModele;

CREATE DATABASE IF NOT EXISTS bdVoitureModele;
USE bdVoitureModele;
# -----------------------------------------------------------------------------
#       TABLE : USER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS USER
 (
   ID INTEGER(2) NOT NULL auto_increment  ,
   PSEUDO CHAR(32) NULL  ,
   EMAIL CHAR(32) NULL  ,
   MDP CHAR(32) NULL  
   , PRIMARY KEY (ID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : CARBURANT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CARBURANT
 (
   IDCARBURANT INTEGER(2) NOT NULL auto_increment ,
   TYPECARBURANT CHAR(32) NOT NULL  
   , PRIMARY KEY (IDCARBURANT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : PAYS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PAYS
 (
   IDPAYS INTEGER(3) NOT NULL,
   NOMPAYS CHAR(32) NOT NULL  
   , PRIMARY KEY (IDPAYS) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : MARQUE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MARQUE
 (
   IDMARQUE INTEGER(2) NOT NULL  auto_increment,
   NOMMARQUE CHAR(32) NOT NULL  
   , PRIMARY KEY (IDMARQUE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : TAG
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TAG
 (
   IDTAGE INTEGER(4) NOT NULL auto_increment ,
   NOMTAG CHAR(32) NULL  
   , PRIMARY KEY (IDTAGE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : MODELE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MODELE
 (
   IDMODELE int(3) NOT NULL auto_increment  ,
   IDCARBURANT INTEGER(2) NOT NULL  ,
   IDMARQUE INTEGER(2) NOT NULL  ,
   NOMMODELE CHAR(32) NULL  ,
   VITESSEMAX INTEGER(4) NULL  ,
   CHEVEAUXDIN int null  ,
   BOITEVITESSE CHAR(32) NULL  ,
   ANNEE INTEGER(4) NULL  ,
   NBPLACE int NULL  ,
   NOTATION INTEGER(2) NULL  ,   
   idtag int,
   prix int(16),
   image char(64),
PRIMARY KEY (IDMODELE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE MODELE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_MODELE_CARBURANT
     ON MODELE (IDCARBURANT ASC);

CREATE  INDEX I_FK_MODELE_MARQUE
     ON MODELE (IDMARQUE ASC);

# -----------------------------------------------------------------------------
#       TABLE : FAVORIS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS FAVORIS
 (
   ID INTEGER(2) NOT NULL auto_increment  ,
   IDMODELE CHAR(32) NOT NULL  ,
   NOMFAV CHAR(32) NULL  
   , PRIMARY KEY (ID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE FAVORIS
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_FAVORIS_MODELE
     ON FAVORIS (IDMODELE ASC);



# -----------------------------------------------------------------------------
#       TABLE : PROVENIR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PROVENIR
 (
   IDPAYS INTEGER(3) auto_increment  ,
   IDMARQUE INTEGER(2) NOT NULL  
   , PRIMARY KEY (IDPAYS,IDMARQUE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE PROVENIR
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_PROVENIR_PAYS
     ON PROVENIR (IDPAYS ASC);

CREATE  INDEX I_FK_PROVENIR_MARQUE
     ON PROVENIR (IDMARQUE ASC);

# -----------------------------------------------------------------------------
#       TABLE : TRIER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TRIER
 (
   IDMODELE CHAR(32) NOT NULL  ,
   IDTAGE INTEGER(4) NOT NULL auto_increment  
   , PRIMARY KEY (IDMODELE,IDTAGE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE TRIER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_TRIER_MODELE
     ON TRIER (IDMODELE ASC);

CREATE  INDEX I_FK_TRIER_TAG
     ON TRIER (IDTAGE ASC);

# -----------------------------------------------------------------------------
#       TABLE : AJOUTER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS AJOUTER
 (
   ID INTEGER(2) NOT NULL  ,
   ID_1 INTEGER(2) NOT NULL  
   , PRIMARY KEY (ID,ID_1) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE AJOUTER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_AJOUTER_FAVORIS
     ON AJOUTER (ID ASC);

CREATE  INDEX I_FK_AJOUTER_USER
     ON AJOUTER (ID_1 ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE MODELE 
  ADD FOREIGN KEY FK_MODELE_CARBURANT (IDCARBURANT)
      REFERENCES CARBURANT (IDCARBURANT) ;


ALTER TABLE MODELE 
  ADD FOREIGN KEY FK_MODELE_MARQUE (IDMARQUE)
      REFERENCES MARQUE (IDMARQUE) ;


ALTER TABLE FAVORIS 
  ADD FOREIGN KEY FK_FAVORIS_MODELE (IDMODELE)
      REFERENCES MODELE (IDMODELE) ;



ALTER TABLE PROVENIR 
  ADD FOREIGN KEY FK_PROVENIR_PAYS (IDPAYS)
      REFERENCES PAYS (IDPAYS) ;


ALTER TABLE PROVENIR 
  ADD FOREIGN KEY FK_PROVENIR_MARQUE (IDMARQUE)
      REFERENCES MARQUE (IDMARQUE) ;


ALTER TABLE TRIER 
  ADD FOREIGN KEY FK_TRIER_MODELE (IDMODELE)
      REFERENCES MODELE (IDMODELE) ;


ALTER TABLE TRIER 
  ADD FOREIGN KEY FK_TRIER_TAG (IDTAGE)
      REFERENCES TAG (IDTAGE) ;


ALTER TABLE AJOUTER 
  ADD FOREIGN KEY FK_AJOUTER_FAVORIS (ID)
      REFERENCES FAVORIS (ID) ;


ALTER TABLE AJOUTER 
  ADD FOREIGN KEY FK_AJOUTER_USER (ID_1)
      REFERENCES USER (ID) ;
