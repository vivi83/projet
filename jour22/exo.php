<?php

/*exo7: CREER UNE FONCTION QUI COMPTE LE NOMBRE DE VALEURS PAIRS 
        DANS UN TABLEAU RECU EN PARAMETRE

    $resultat = compterPair([ 1, 2, 17, 25]);
    // $resultat = 1
    // PAIR     => 2
    // IMPAIR   => 1, 17, 25

    // PAIR OU IMPAIR => DIVISIBLE PAR 2 OU PAS
    // ASTUCE   => MODULO % => RESTE DE LA DIVISION
    // PAIR     => RESTE DE LA DIVISION PAR 2 EST 0
    // IMPAIR   => RESTE DE LA DIVISION PAR 2 EST 1

    // RESTE DE LA DIVISION
    // 7 MODULO 2 = 1
    // 6 MODULO 2 = 0


    $tabNombre = [ 18, 4, 7, 0, 24, 22, 47, 199 ];
    // CERVEAU HUMAIN => RESULTAT = 5

    // MON CERVEAU PREND LES NOMBRES DU PREMIER AU DERNIER
    // ET POUR CHAQUE NOMBRE, MON CERVEAU SE DEMANDE SI CE NOMBRE EST PAIR OU IMPAIR
    // SI LE NOMBRE EST PAIR ALORS ON AUGMENTE LE COMPTEUR DE 1

    // ENSUITE, IL FAUT TRADUIRE CES ETAPES EN CODE
    function compterPair($tabNombre)
    {
        // VALEUR INITIALE AU COMPTEUR
        $compteur = 0;
        // IL FAUT CODER LE FONCTIONNEMENT DU CERVEAU
        // MON CERVEAU PREND LES NOMBRES DU PREMIER AU DERNIER
        // EN PROGRAMMATION => BOUCLE
        foreach($tabNombre as $nombre)
        {
            // ET POUR CHAQUE NOMBRE, 
            // MON CERVEAU SE DEMANDE SI CE NOMBRE EST PAIR OU IMPAIR
            // EN PROGRAMMATION => CONDITION if...else...
            if (($nombre % 2) == 0) 
            {
                // PAIR
                // SI LE NOMBRE EST PAIR ALORS ON AUGMENTE LE COMPTEUR DE 1
                // EN PROGRAMMATION => VARIABLE POUR MEMORISER UNE VALEUR NOMBRE
                // $compteur++;
                $compteur = $compteur + 1;
            }
        }

        return $compteur;
    }*/



   /* exo8: CREER UNE FONCTION concatenerTexte 
        QUI CONCATENE LES LETTRES DANS UN TABLEAU (EN PARAMETRE)
        ET QUI AJOUTE UNE VIRGULE ENTRE LES LETTRES
        (ATTENTION: PAS DE VIRGULE AU DEBUT, NI A LA FIN)

        concatenerTexte([ 'a', 'b', 'c', 'd' ]);
        // RESULTAT UN TEXTE "a,b,c,d"

        concatenerTexte([ 'i', 'j', 'k' ]);
        // RESULTAT UN TEXTE "i,j,k"

        On veut transformer un tableau en chaine de caractère 
        donc On crée le tableau 
        puis on fait apparaitre les lettres */


        $tablettre =['a','b','c','d'];
        
        function concatenerTexte($tablettre)
        {
            $resultat = "";
            foreach ($tablettre as $indice => $lettre)
            {
            $resultat= $resultat . $lettre ; // le point sert a concatener 
            // Dans ce cas soit on met la virgule soit on ne rajoute pas la virgule ducoup on utilise une condition
            if ($indice >0)
            {
                $resultat= "$resultat," . "$lettre";
            }
            else
            {
                // ON EST SUR LE PREMIER ($indice == 0)
                $resultat = "$resultat" . "$lettre";
            }
        }

        return $resultat;
    }    
    // choix 2: 
    function concatenerTexteBis ($tablettre)
    {
        // VALEUR INITIALE: LE PREMIER ELEMENT DU TABLEAU
        $resultat = $tablettre[0];
        // QUAND ON PARCOURT LE TABLEAU
        // ALORS IL FAUT COMMENCER AU 2E ELEMENT
        // (indice = 1)
        for($i=1; $i <count($tablettre); $i++)
        {
            $lettre = $tablettre[$i];
            // ON CONCATENE AVEC LA VIRGULE
            $resultat  = "$resultat,$lettre";
        }
        return $resultat;
    }
     $texteConcatene = concatenerTexteBis([ 'a', 'b', 'c', 'd' ]);
    // TABLEAU ORDONNE
    // INDICE 0 => VALEUR 'a'
    // INDICE 1 => VALEUR 'b'
      echo "<h1>LE RESULTAT BIS EST $texteConcatene</h1>";


    /* Exo 9
    * exo9: CREER UNE FONCTION calculerPrixTotal 
        QUI PREND EN PARAMETRES 2 TABLEAUX
        $tabQuantite
        $tabPrixUnitaire
        ET QUI RENVOIE LE PRIX TOTAL DU PANIER
        NOTE: L'ORDRE DES VALEURS DANS LES 2 TABLEAUX EST CORRECTEMENT FOURNI
    EXEMPLE:
    $tabQuantite     = [ 1,  2,  3,  4 ];
    $tabPrixUnitaire = [ 10, 20, 30, 40 ];
    $prixTotal       = calculerPrixTotal($tabQuantite, $PrixUnitaire);
    // $prixTotal => 300 EUROS*/
   
   

    // CREER UNE FONCTION POUR CALCULER LE PRIX TOTAL
    // LES 2 TABLEAUX ONT LE MEME NOMBRE D'ELEMENTS
   /* function calculerPrixTotal ($tabQuantite, $tabPrixUnitaire)
    {
        // ICI IL FAUT AJOUTER LE CODE MANQUANT
        // PRIXTOTAL = 1x10 + 2x20 + 3x30 + 4x40
        // J'AI PARCOURU LES 2 TABLEAUX
        // POUR PRENDRE CHAQUE ELEMENT
        // ET JE MULTIPLIE LES VALEURS => SOUS-TOTAL
        // ET JE RAJOUTE LE SOUS-TOTAL AU TOTAL
        
        // VALEUR INITIALE
        $total = 0;
    
        // J'AI PARCOURU LES 2 TABLEAUX
        // BOUCLE => for
        for ($indice=0; $indice < count($tabPrixUnitaire); $indice++)
        {
            // POUR PRENDRE CHAQUE ELEMENT
            // ET JE MULTIPLIE LES VALEURS => SOUS-TOTAL
            $prixUnitaire = $tabPrixUnitaire[$indice];
            $quantite     = $tabQuantite[$indice];
            // LA BOUCLE PERMET DE REUNIR LES 2 INFOS DES 2 TABLEAUX
            // POUR EFFECTUER LA MULTIPLICATION
            $sousTotal    = $prixUnitaire * $quantite;
    
            // ET JE RAJOUTE LE SOUS-TOTAL AU TOTAL
            $total = $total + $sousTotal;    
        }
    
        return $total;
    }
    
    
    $tabQuantite     = [ 1,  2,  3,  4 ];
    $tabPrixUnitaire = [ 10, 20, 30, 40 ];
    $prixTotal       = calculerPrixTotal($tabQuantite, $tabPrixUnitaire);    
    // $prixTotal => 300 EUROS 
    
    echo "<h1>PRIX TOTAL PANIER: $prixTotal euros</h1>";*/

// Exo 13 :

// on construis une matrice
//

