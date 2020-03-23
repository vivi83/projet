<?php
function filtrer ($name)
{
    $info=$_REQUEST[$name]??"";

    return $info;
}

function insererLigneSQL($nomTable, $tableau)
{
    $requeteSQL =

    <<<CODESQL

    INSERT INTO declaration
    (nom, prenom, adresse, raison, numero, dateDeclaration)
    VALUES
    (:nom, :prenom, :adresse, :raison, :numero, :dateDeclaration)
CODESQL;

$pdo= new PDO("mysql:host=localhost;dbname=attestation;charset=utf8;","root","");
$pdoStatement=$pdo -> prepare($requeteSQL);
$pdoStatement -> execute($tableau);

}
