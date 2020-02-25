<?php
$nombreinfo=count($_REQUEST);

if($nombreinfo>0)
{
$nom= $_REQUEST["nom"];
$prenom=$_REQUEST["prenom"];
$email= $_REQUEST["email"];
$message= $_REQUEST["message"];
$motdepasse= $_REQUEST["motdepasse"];

$MessageStock=
<<<texte
nom:$nom
prenom:$prenom
email:$email
message:$message
motdepasse:$motdepasse


texte;

file_put_contents("php/model/contact.txt", $MessageStock, FILE_APPEND);

echo "merci pour votre message $nom";
}




?>