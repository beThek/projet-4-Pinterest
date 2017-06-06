<!DOCTYPE html>
<html lang='en'>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>projet-4-Pinterest</title>
    </head>

    <body>

        <header class>
            <h1>My First PHP Uploader</h1>
        </header>

<div class="container">
    <div class="row">
        <div class="item">
            <div class="well">






        <form method="POST" action="upload.php" enctype="multipart/form-data">

            <input type="file" name="avatar"/>
            <input type="submit" value="SEND"></input>

        </form>



        <div class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 200 }'>
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

                    </div>
                </div>
            </div>
        </div>



    </body>
</html>
