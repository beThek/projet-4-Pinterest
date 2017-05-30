
<?php

/*
    NOM VARIABLE
 Le nom 	$_FILES['avatar']['name']
 Le chemin du fichier temporaire 	$_FILES['avatar']['tmp_name']
 La taille (peu fiable, dépend du navigateur) 	$_FILES['avatar']['size']
 Le type MIME (peu fiable, dépend du navigateur) 	$_FILES['avatar']['type']
 Un code d'erreur si besoin 	$_FILES['avatar']['error']
*/

if(isset($_FILES['avatar'])){

    $dossier = 'upload/';
    $fichier = $dossier . basename($_FILES['avatar']['name']);
    $extensions = array('jpg','png','jpeg','gif','WebP'); //
    $imagePath_parts = pathinfo($_FILES['avatar']['name']);
    $extentionImage = $imagePath_parts['extension'];

if(!in_array($extentionImage, $extensions)) //Si l'extension n'est pas dans le tableau
    {
        $erreur = 'ONLY FILETYPE : .jpg, .jpeg, .png, .gif, .Webp';
    }



if(move_uploaded_file($_FILES['avatar']['tmp_name'], $fichier)) // si fonction renvoie TRUE alors OK
        {
            echo 'upload effectué avec succès !';
            echo '<a href="' . $fichier . '"><img src="' .$fichier . '"></a><br />';

        }
else //sinon (renvoie la fonction FALSE)
        {
            echo "Echec de l'upload!";
        }

}







?>
