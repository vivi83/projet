/* Demande à  l'utilisateur de rentrer une note ou de taper "fin"
 chaque note est sauvegardée dans un tableu $note (pensez $note[])
 à la fin on affiche le tableau de note sous forme de liste
 */


<?php

$tableau=[];
$action= null;

while ($action!=='fin') {
   $action= readline('entrer une nouvelle note( ou \'fin/\' pour terminer la saisie):');
   if($action!=='fin'){
       $note[]= $action;
   }
}

foreach ($notes as $notee) {
    echo "-$note\n";

}

?>

on veut demander à l'utilisateur de rentrer les horaires d'ouverture d'un magasin
on demande à l'utilisateur de rentrer une heure et on lui dira si le magasin est ouvert
<?php
// on demande à l'utilisateur de rentrer un créneaux
    // on demande l'heure de début
    // on demande l'heure de fin
    // on vérifie que l'heure de début < l'heure de fin
    // on demande si on veut rajouter un nouveau créneau (o/n)

// On demande à l'utilisateur de rentrer une heure 
// on affiche l'état d'ouverture du magasin

$créneaux= [];
while (true) {
    $debut = readline("heure de d'ouverture:");
    $fin = readline("horaire de fermeture:");
    if ($debut>=$fin){
        echo "le creneaux ne peut pas etre enregistré car l'heure de debut($debut) est supérieure à l'heure de fermeture ($fin)"; 
    }
    else {
        $creneaux[] =[$debut,$fin];
        $action= readline("voulez vous enregistrer un nouveau créneau");
        if($action==='n'){
        break;

        }
    }
}
$heure = readline("A qu'elle heurre voulez vous visiter le magasin?");
$creneauTrouve= false;

foreach($creneaux as $creneau){
    if($heure>=$creneau[0] &&$heure<=$creneau[1])
    {
    $creneauTrouve=true;
break;
}
}

if($creneauTrouve){
    echo "le magasin est ouvert";
} 
else{
    echo "Désolé, le magasin est fermer";

}
print_r($creneaux);
// Apres le while (true)
// On veut afficher le magasin est ouvert de 14h à 18het de 9h à 14h
echo' le magasin est ouvert de ';
foreach ($creneaux as $creneau) {
    echo $creneau[0] . 'h à'. $creneau[1].'h';
    // on peut aussi écrire 
    // foreach($creneaux as $k=>$creneau) {
     // if($k>0){
         // echo "et de ";
     //}
    //}
}




?>