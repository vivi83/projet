<section>
<h2>Formulaire de déclaration pour attestation </h2>
<form action="" method="POST">
    <input type="text" name="nom" requiered placeholder="Entrer votre nom">
    <input type="text" name="prenom" required placeholder="Entrer votre prénom">
    <tetarea name="adresse" cols="60" rows="6" required placeholder="Entrer votre adresse"> </tetarea>
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

// Code pour traiter le formulaire 
function filtrer ($name)
{
    $info=$_REQUEST[$name]??"";

    return $info;
}






</div>
</form>


</section>