CREATE TABLE IMAGE 
(
id INT NOT NULL AUTO INCREMENT PRIMARY KEY ,
nom varchar 255 ,
)
CREATE TABLE ANIMAL 
(
id INT NOT NULL AUTO INCREMENT PRIMARY KEY ,
race varchar 255,
prenom varchar 255,
)
CREATE TABLE HABITAT 
( 
id INT NOT NULL AUTO INCREMENT PRIMARY KEY ,
nom varchar 255,
description varchar 255,
)
CREATE TABLE SERVICE 
(
id INT NOT NULL AUTO INCREMENT PRIMARY KEY ,
nom varchar,
description varchar 255,
images varchar 255,
)
CREATE TABLE COMMENTAIRE
(
id INT NOT NULL AUTO INCREMENT PRIMARY KEY ,
pseudo varchar 255,
avis varchar 255,
estValid 255
)
CREATE TABLE UTILISATEUR,
(
id INT NOT NULL AUTO INCREMENT PRIMARY KEY ,
nom varchar 255,
mail varchar 255,
mot de passe integer,
role varchar 255
prenom varchar 255
)

CREATE TABLE COMPTE RENDU ANIMAL
(
id INT NOT NULL AUTO INCREMENT PRIMARY KEY ,
compte rendu par animal,
etat varchar 255,
regime alimentaire varchar 255,
)
CREATE TABLE NOURRITURE
id INT NOT NULL AUTO INCREMENT PRIMARY KEY ,
nom 255
type varchar 255
