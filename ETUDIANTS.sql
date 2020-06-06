CREATE DATABASE ETUDIANTS;
USE ETUDIANTS;
CREATE TABLE ETUDIANT_GI (
  CNE varchar(10) PRIMARY KEY,
  CIN longblob NOT NULL,
  nom varchar(30) NOT NULL,
  prenom varchar(30) NOT NULL,
  dateNaissance date NOT NULL,
  nationalite varchar(30) DEFAULT 'maroc',
  province varchar(30) DEFAULT NULL,
  ville varchar(30) NOT NULL,
  adresse varchar(50) DEFAULT NULL,
  codePostal varchar(10) DEFAULT NULL,
  telephone varchar(15) DEFAULT NULL,
  email varchar(30) DEFAULT NULL,
  anneeObtentionLicence year(4) NOT NULL,
  moyenneLicence int(20) NOT NULL,
  mentionLicence longblob NOT NULL,
  CV longblob NOT NULL
);
