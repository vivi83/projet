
<section>
        <h3>Synthese professionnelle</h3>
        <p>Mon moteur est ma cnscience professionnelle et mon envie d'acquérir de nouveaux savoirs. Dynamique, polyvalente, rigoureuse,
            patiente et organisée seront les principales qualités qui dominerot pour la réalisation de mon travail.
        </p>
    </section>
   
    <section class=colonnegauche>
        <div class="competences">
             <h3>Compétences</h3>
             <div>Rédaction de documents uniques</div>
             <div>Gestion des stocks</div>
            <div>Capacité d'adaptation </div>
            </div>
<div>
 <?php

$tableau = glob("assets/css/img/photo*.{jpg,png}",GLOB_BRACE);

foreach ($tableau as $i => $image)
 {
     echo  
     <<<CODEHTML
     <img src="$image" alt"">
     CODEHTML;
}

?>
</div>
       
</div>
         <div class="Loisirs">
             <h3> Loisirs</h3>
            <div>Dessin</div>
            <div>Peinture</div>
            <div>Voyages</div>
         </div>
  <div>
 <?php
  $tableau = glob("assts/css/img/photo*.{jpg,png}",GLOB_BRACE);
for ($i=0; $i < count($tableau) ; $i++)
 { 
    echo
    <<<CODEHTML
    <img src="$image" alt"">
  CODEHTML;
}
?>
  </div>
    </section>
    <section class="gauche">
        <h3> Expériences Professionnelles</h3>
        <p>Stage développeur web à Bras  Décembre 2019<br>
        Mise en ligne d'article et documents sur le site
        Mise en ligne d'article sur facebook pro</p>
        <p>Agent d'entretien à Marseille 2018<br>
         Gestion des classes et du travail en autonomie</p>

        <p>Toiletteur canin Marseille 2016<br>
        Accueil, gestion des besoins de la clientèle et adaptation à leurs souhaits, gestion du comportement de chaque animal </p>

        <p>Agent d'accueil à St Maximin 2014<br>
        Accueil clientèle,standard, archivvavge, saisie de comptabilité, numérisation de documents
        </p>
        <p>Chef d'équipe à Marseille 2009-2012<br>
        Gestion des stocks, invenntaire, gestion du personnel, gestion des plannings, résolution des problèmes avec les clients, contrôlenqualité, réorganisation des chantiers
         </p>
         <p>Agent administratif à Saint maximin été 2008 et 2009<br>
        Accueil, standard, secrétariat, saisie de comptabilité, archivage
         </p>
        <p>Garde d'enfants régulière depuis 2013 </p>

     </section>

    <section>
        <h3>Formation</h3>
        <ul >
            <li>2020: Formation coder/déployer Simplon en cours</li>
            <li>2019:Etudes de développeur web en earl-learning</li>
            <li>2016: Toilletage canin</li>
            <li>2012: BTS Hygiène Propreté Environnement</li>
            <li>2010:BAC Pro Hygiène et Environemment</li>
            <li id="bac"> Bac Technologique Chimie de laboratoire et procédé industriel</li>
        </ul>
     </section>

     <section id="contact">
     <h3>Contact</h3>
     
     <form action="#contact" method="get">
     <input type="text" name="nom" placeholder="écrire nom" required>
     <input type="email" name="email" placeholder="entrer son email" required>
     <input type="text" name="prénom" placeholder="ecrit prénom">
     <input type="password" name="motdepasse" placeholder=" mot de passe">
     <textarea name="message"  cols="30" rows="10"placeholder="écrire son message" required></textarea>
     
    <button type="submit">Envoyer</button>

    <div>
    <?php
    require_once "php/controller/traitement-contact.php"
    ?>
    </div>
    
     </form>
     
     </section>

