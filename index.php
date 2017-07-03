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




<!--First-Div-Container-fluid start -->
        <header class="container-fluid">
                    <div class="well">
                        <h1>My First PHP Uploader</h1>
                        <form method="POST" action="upload.php" enctype="multipart/form-data">

                            <input type="file" name="avatar"/>
                            <input type="submit" value="SEND"></input>

                        </form>

                    </div>
                </header>
<!--First-Div-Container-fluid end -->
<!--Second-Div-Container-fluid start -->
        <div class="container-fluid">


        <div class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 100}'>
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
