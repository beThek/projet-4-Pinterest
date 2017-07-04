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
                        <form class="navbar-form navbar-right" method="POST" action="upload.php" enctype="multipart/form-data">
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
