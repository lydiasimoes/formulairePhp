<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>exercice 7</title>
    </head>
    
    <body>    
        <div class="text-center text-white fs-1 bg-primary">
            <p>Civilité : </p>
            <select tabindex="0" size="1" name="civilite" value="Mme">
                <option value="Mr">Mme</option> 
                <option value="Mme">Mr</option> 
            </select>
            <?php

                if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0){
                    $infosfichier = pathinfo($_FILES['monfichier']['name']);
                    $extension_upload = $infosfichier['extension'];
                    $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                }
                }
?>

            <?php 

            if ( isset( $_GET['submit'] ) ) {
                $lastname = $_GET['lastname']; 
                $firstname = $_GET['firstname']; 
                $civility = $GET_['civilite'];
                echo $civility.' '.$lastname.' '.$firstname; 
            }
            else {
            ?> 

            <form action="index.php" method="get">    
                <div>
                    Entrez votre nom :
                    <input type="text" name="lastname">
                </div>
                <div>
                    Entrez votre prénom :
                    <input type="text" name="firstname">
                </div>
                
            </form>
            <form action="cible_envoi.php" method="post" enctype="multipart/form-data">
                <p>
                    Formulaire d'envoi de fichier :
                    <input type="file" name="monfichier" /><br />
                    <input type="submit" value="Envoyer le fichier" />
                </p>
                <input type="submit" value="Envoyer">
            </form>
            <?php }?>
        </div>
    </body>
</html>