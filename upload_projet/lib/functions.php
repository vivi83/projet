<?php

require_once 'config.php';

function getConnection()
{
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    try {
        // on essaie d'exécuter le code dans la partie try
        $db = new PDO(DSN, USERNAME, PWD, $options);
        // echo 'Succesfully connected to DB';
    } catch (PDOException $error) {
        // si erreur, on gère l'erreur et on récupère le message associé
        echo "Failed to connect to DB with error : {$error->getMessage()}";
    }

    return $db;
}

function createUniqueString($string,$delimiter){
    $pattern='/\s/';
    $newString=preg_replace($pattern,$delimiter,$string);
    return uniqid().'-'.$newString;
}
// TODO: créer une fonction qui prendra en paramètre une requête et qui traitera les données de notre formulaire
function isExtensionAuthorized($mimeType, $tabExtension)
{   $mimeType=explode('/', $mimeType);
    $extension=strtolower($mimeType[1]);

if(in_array($extension, $tabExtension)){
    return true;
}    //print_r($request);
    return false;
}
function isValidSize($size,$maxSize){
    if($size>$maxSize){
        return false;
    }
    return true;
}

function handleRequest($request){
    
    if (isset($request['fileUpload'])) {
        extract($request['fileUpload']);
        if(UPLOAD_ERR_OK===$error){
           // $pattern='/\s/';
           // $name = preg_replace($pattern,'-',$name);

        //$fileName = uniqid()."-".$name;
            $authorizedExtensions=[
                'jpg',
                'jpeg',
                'png',
                'svg',
            ];

            $checkExt= isExtensionAuthorized($type, $authorizedExtensions);
            $checkSize=isValidSize($size,'1000000');

            if(false===$checkExt || false == $checkSize){
                echo "Vérifier Extension ou taille du fichier";
                return;
            }

          //  if($request['fileUpload']['size']>1000000){//$size
                //    echo 'la taille du fichier doit être inférieure à 1Mo';
                  //  return;
           // }
           // $mimeType=explode('/',$type);
            //$extension= strtolower($mimetype[1]);

        $fileName=createUniqueString($name,'-');

        $uploadsDir='uploads/';
        $path=$uploadsDir.$fileName;
        
        if(move_uploaded_file($tmp_name,$path)){
            echo"Le fichier {$fileName} est enregistré";

            // Se connecter à la base de donnée
            $pdo=getConnection();
            // Requete SQL
        $sql='INSERT INTO image(name,path) VALUE(:name,:path)';

        $pdoStatement=$pdo->prepare($sql);
        $file = [
            ':name'=>$name,
            ':path'=>$path
        ];

        $pdoStatement->execute($file);
      
        echo "Le fichier est sauvegardé dans la BDD.il est visible <a href={$path}>ici<a>";
        echo "<img src={$path}>"; 
    }
            else 'Erreur lors de la sauvegarde';
        }
    }
}
