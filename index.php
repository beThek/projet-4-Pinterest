<!DOCTYPE html>
<html lang='en'>

    <head>
        <meta charset="utf-8">
        <title>projet-4-Pinterest</title>
    </head>

    <body>

<?php

        $dossier_cible = 'upload/';
        $contenu_du_dossier = scandir($dossier_cible);

        //echo "hello";
        //print_r($contenu_du_dossier);

        foreach($contenu_du_dossier as $value){
            //si le premier caractère !='.', affiche une balise img avec la valeur
        if(0!=strpos($value,'.')){
            echo '<p>'.$value.'</p>';
            echo '<img src="'.$dossier_cible.$value.'" alt="" width="100">';
        }
        }


?>

        <form method="POST" action="upload.php" enctype="multipart/form-data">

            <input type="file" name="avatar"/>

            <input type="submit" name="envoyer" value="Envoyer le fichier"/>


        </form>




    </body>
</html>
