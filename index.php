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
    if($_FILES['avatar']['size']>500000)
        {
         //code.....
        }

    //SI TEEST OK alors MOVE IN UPLOAD LOCAL FOLDER
    if(move_uploaded_file($_FILES['avatar']['tmp_name'], $fichier_cible))
    {
            echo 'upload effectué avec succès !';
            //echo '<a href="' . $fichier_cible . '"><img src="' .$fichier_cible . '"width="100""></a><br />';
    }
    else //UPLOAD FAILURE
    {
            echo "Echec de l'upload!";
    }


}

// CLAVISKA SIMPLE IMAGE RESIZING IMAGE
    require 'src/claviska/SimpleImage.php';

    try {
  // Create a new SimpleImage object
  $image = new \claviska\SimpleImage();

  // Magic! ✨
  $image->fromFile($fichier_cible); // load image.jpg

  $image->resize(320, 200); // resize to 320x200 pixels

 // $image->colorize('darkblue');

  $image->toFile($fichier_cible, 'image/png'); // convert to PNG and save a copy to new-image


  // And much more! 💪
} catch(Exception $err) {
  // Handle errors
  echo $err->getMessage();
}
?>
<!DOCTYPE html>
<html lang='en'>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/master.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>projet-4-Pinterest</title>
    </head>

    <body>
<!--nav-bar + my computer + Upload button start-->
            <nav class="navbar navbar-inverse navbar-fixed-top navstyle">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">My First PHP Uploader</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <form class="navbar-form navbar-right" method="POST" action="" enctype="multipart/form-data">
                            <div class="form-group">

                                <label class="btn btn-danger" for="avatar">My Computer</label>
                                <input type="file" name="avatar" id="avatar">

                            </div>

                        <button type="submit" class="btn btn-danger">Upload</button>
                        </form>
                    </div><!--/.navbar-collapse -->
                </div>
            </nav>
<!--nav-bar + my computer + Upload button start end -->
<!--Second-Div-Container-fluid start -->
        <div class="container-fluid">


            <div class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 200}'>
                <div class="grid-sizer"></div>
<?php


        $dossier_cible = 'upload/';
        $contenu_du_dossier = scandir($dossier_cible);

        //echo "hello";
        //print_r($contenu_du_dossier);

        foreach($contenu_du_dossier as $value){
            //si le premier caractère !='.', affiche une balise img avec la valeur
        if(0!=strpos($value,'.')){
            echo '<div class="grid-item">';
            //echo '<p>'.$value.'</p>';
            echo '<img src="'.$dossier_cible.$value.'" alt="" width="500">';
            echo '</div>';
        }
        }
?>
        </div>
        <script src="/js/masonry.pkgd.js"></script>
        <script src="/js/imagesloaded.pkgd.js"></script>
        <script src="/js/loader.js"></script>







        </div>





    </body>
</html>
