<section>
<h2>Formulaire de déclaration pour attestation </h2>
<form action="" method="POST">
    <input type="text" name="nom" requiered placeholder="Entrer votre nom">
    <input type="text" name="prenom" required placeholder="Entrer votre prénom">
    <textarea name="adresse" cols="60" rows="6" required placeholder="Entrer votre adresse"> </textarea>
    <h3> Cocher la raison de votre déplacement </h3>
    <label>
    <input type="radio" name="raison"required value="courses alimentaires">
    <span>Courses Alimentaires</span>
</label>
<label>
    <input type="radio" name="raison"required value="travail">
    <span>Travail</span>
</label>
<label>
    <input type="radio" name="raison"required value="aide aux proches">
    <span> Aide aux proches </span>
</label>
<label>
    <input type="radio" name="raison"required value="Nécessité Médicale">
<span> Nécessité Médicale </span>
<label>
    <input type="radio" name="raison" required value="Nécessité familiale">
<span> Nécessité Familliale</span>
</label>
<label>
    <input type="radio" name="raison" required value="sortie sport individuel">
    <span>Sortie Sport individuel</span>
</label>

<button type="submit">Enregistrer la déclaration </button>

<!-- Identifiant pour que php puisse distinguer les formulaires-->
<input type="hidden" name="identifiantFormulaire" value="declaration">
<div class="confirmation">

<?php

require_once "php/mes-fonctions.php";

// Code pour traiter le formulaire 

$identifiantFormulaire=filtrer("identifiantFormulaire");

if($identifiantFormulaire=="declaration")
{
    $tableau=[
        "nom" =>filtrer("nom"),
        "prenom" =>filtrer("prenom"),
        "adresse" => filtrer("adresse"),
        "raison" => filtrer("raison"),
    ];

    extract($tableau);
    if ($nom!=""
    && $prenom!=""
    && $adresse!=""
    && $raison!="")
    {
        $tableau["numero"]=uniqid();
        $tableau["dateDeclaration"]=date("Y-m-d H:i:s");

      insererLigneSQL("declaration",$tableau);


        echo "votre déclaration est bien enregistrée. Notez bien votre numéro d'attestation";
    }
    else 
    {
        echo "Veuillez fournir toutes les informations ";
    }


}

?>





</div>
</form>


</section>