<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>exercice 5</title>
    </head>
    
    <body>    
        <div class="text-center text-info fs-1 bg-secondary">
            <p>Civilité : </p>
            <select tabindex="0" size="1" name="civilite" value="Mme">
                <option value="Mr">Mme</option> 
                <option value="Mme">Mr</option> 
            </select>

            <form action="index.php" method="get">    
                <div>
                    Entrez votre nom :
                    <input type="text" name="lastname">
                </div>
                <div>
                    Entrez votre prénom :
                    <input type="text" name="firstname">
                </div>
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </body>
</html>
