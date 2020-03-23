<section>
<h2> Outil pour vérifier le numéro d'attestation </h2>
<form action="" method="GET">
<input type="text" name="numero" placeholder="entrez le numéro d'attestation" required>
<button type="submit"> Rechercher </button>

<input type="hidden"name="identifiantFormulaire" value="vérifier">
<div class="confirmation"></div>
<?php
require_once "php/mes-fonctions.php";

$identifiantFormulaire=filtrer("identifiantFormulaire");
if($identifiantFormulaire=="vérifier")
{
$tableau=[
    "numero"=>filtrer("numero"),
];

extract ($tableau);
if($numero !="")
{
    $requeteSQL =
    <<<CODESQL
    SELECT * 
    FROM declaration
    WHERE 
    numero = :numero
    CODESQL;

    $pdo= new PDO ("mysql:host=localhost;dbname=attestation;charset=utf8;","root","");

    $pdoStatement = $pdo-> prepare($requeteSQL);
    $pdoStatement->execute($tableau);

    $tabLigneTrouvees = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    $nbLigneTrouvees = count($tabLigneTrouvees);
    echo "<h2>IL Y A $nbLigneTrouvees RESULTAT SUR LE NUMERO $numero</h2>";

    foreach($tabLigneTrouvees as $tabLigne)
    {
        extract($tabLigne);

        echo 
<<<CODEHTML
        <article>
            <h3>$nom</h3>
            <h4>$prenom</h4>
            <p>$adresse</p>
            <p>$raison</p>
            <h5>$dateDeclaration</h5>
            <h5>$numero</h5>
        </article>
CODEHTML;
    }
}
else
{
    echo "IL FAUT FOURNIR UN NUMERO";
}
}


?>

</section>