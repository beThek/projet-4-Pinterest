
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

    $dossier_cible = 'upload/';
    $fichier_cible = $dossier_cible . basename($_FILES['avatar']['name']);
    $extensions = array('jpg','png','jpeg','gif','WebP'); //
    $imagePath_parts = pathinfo($_FILES['avatar']['name']);
    $extentionImage = $imagePath_parts['extension'];


    //TEST IMAGE EXTENSION
    if(!in_array($extentionImage, $extensions))
        {
            $erreur = 'ONLY FILETYPE : .jpg, .jpeg, .png, .gif, .Webp';
        }


    //TEST IMAGE SIZE>500000
    if($_FILES['avatar']['size']>2000000)
        {
        echo "Sorry, your file is too large";
        }

    //SI TEEST OK alors MOVE IN UPLOAD LOCAL FOLDER
    if(move_uploaded_file($_FILES['avatar']['tmp_name'], $fichier_cible))
    {
            echo 'upload effectué avec succès !';
            echo '<a href="' . $fichier_cible . '"><img src="' .$fichier_cible . '"width="100""></a><br />';
    }
    else //UPLOAD FAILURE
    {
            echo "Echec de l'upload!";
    }


}

    require 'src/claviska/SimpleImage.php';

    try {
  // Create a new SimpleImage object
  $image = new \claviska\SimpleImage();

  // Magic! ✨
  $image->fromFile($fichier_cible); // load image.jpg

  $image->resize(320, 200); // resize to 320x200 pixels

  $image->toFile('new-image.png', 'image/png'); // convert to PNG and save a copy to new-image


  // And much more! 💪
} catch(Exception $err) {
  // Handle errors
  echo $err->getMessage();
}


?>
