<!DOCTYPE html>
<html lang='en'>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <title>projet-4-Pinterest</title>
    </head>

    <body>
        <header>
            <h1>My First PHP Uploader</h1>
        </header>


        <form method="POST" action="upload.php" enctype="multipart/form-data">

            <input type="file" name="avatar"/>
            <input type="submit" class="btn btn-primary" value="SEND"></input>

        </form>



        <div class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 160 }'>
<?php

        $dossier_cible = 'upload/';
        $contenu_du_dossier = scandir($dossier_cible);

        //echo "hello";
        //print_r($contenu_du_dossier);

        foreach($contenu_du_dossier as $value){
            //si le premier caractère !='.', affiche une balise img avec la valeur
        if(0!=strpos($value,'.')){
            echo '<div class="grid-item">';
            echo '<p>'.$value.'</p>';
            echo '<img src="'.$dossier_cible.$value.'" alt="" width="300">';
            echo '</div>';
        }
        }
?>










            </div>



        <script src="/projet-4-Pinterest/js/masonry.pkgd.js"></script>

    </body>
</html>
