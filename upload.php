
<?php
/*
    NOM VARIABLE
 Le nom 	$_FILES['avatar']['name']
 Le chemin du fichier temporaire 	$_FILES['avatar']['tmp_name']
 La taille (peu fiable, dépend du navigateur) 	$_FILES['avatar']['size']
 Le type MIME (peu fiable, dépend du navigateur) 	$_FILES['avatar']['type']
 Un code d'erreur si besoin 	$_FILES['avatar']['error']
*/

$dossier = 'upload/';
$fichier = basename ($_FILES['yourimage'] ['name']);



if(isset ($_FILES['yourimage']))
 {
    # code..


    if(move_uploaded_file($_FILES['yourimage'] ['tmp_name'], $dossier . $fichier)) // si fonction renvoie TRUE alors OK

    {
        echo 'upload effectué avec succès !';
    }
    else //sinon (renvoie la fonction FALSE)
    {
        echo 'Echec de l\'upload!';
    }

}



/*TABLEAU EXTENSION AUTORISEES*/

$extensions =array('.jpg','.png','.jpeg','.gif','.WebP')

$extension = strrrch($_FILES['yourimage']['name'], '.');
//Ensuite on teste
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
    $erreur = 'ONLY FILETYPE : .jpg, .jpeg, .png, .gif, .Webp'
}




    /*TAILLE MAXI DU FICHIER*/

// taille maximum (en octets)
$taille_maxi = 100000;
//Taille du fichier
$taille = filesize($_FILES['avatar']['tmp_name']);
if($taille>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
}


print_r ($dossier);
print_r ($fichier);
print_r ($erreur);
print_r ($taille_maxi);
print_r ($taille);
print_r ($erreur);
 ?>
