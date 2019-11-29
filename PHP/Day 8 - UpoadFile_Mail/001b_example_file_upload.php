<?php
/*
  Suit un exemple d'utilisation du mécanisme d'upload de fichiers
  en PHP.
 */

// J'ai recu des données de formulaire
if (isset($_POST['send-file'])) {

    // Vérifier si le téléchargement du fichier n'a pas été interrompu
    if ($_FILES['my-file']['error'] != UPLOAD_ERR_OK) {
        // A ne pas faire en-dehors du DOM, bien sur.. En réalité on utilisera une variable intermédiaire
        echo 'Erreur lors du téléchargement.';
    } else {
        echo '<pre>';
        var_dump($_FILES);
        echo '</pre>';
        // Objet FileInfo
        //$finfo = new finfo(FILEINFO_MIME_TYPE);

        // Récupération du Mime
        //$mimeType = $finfo->file($_FILES['my-file']['tmp_name']);

        $extFoundInArray = array_search(
            $_FILES['my-file']['type'], array(
                'jpg' => 'image/jpeg',
                'png' => 'image/png',
                'gif' => 'image/gif',
            )
        );

        if ($extFoundInArray === false) {
            echo 'Le fichier n\'est pas une image';
        } else {
            // Renommer nom du fichier
            $shaFile = sha1_file($_FILES['my-file']['tmp_name']);
            
            $nbFiles = 0;
            $fileName = ''; // Le nom du fichier, sans le dossier
            do {
                $fileName = $shaFile . $nbFiles . '.' . $extFoundInArray;
                $fullPath = './uploads/' . $fileName;
                $nbFiles++;
            } while(file_exists($fullPath));

            $moved = move_uploaded_file($_FILES['my-file']['tmp_name'], $fullPath);

            if (!$moved) {
                echo 'Erreur lors de l\'enregistrement';
            } else
                echo "File successfully saved";
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form enctype="multipart/form-data" action="#" method="post">
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
            Sélectionner le fichier : <input name="my-file" type="file" />
            <input type="submit" name="send-file" value="Envoyer le fichier" />
        </form>
    </body>
</html>
