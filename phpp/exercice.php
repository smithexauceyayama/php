<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $serveur = "localhost";
    $login = "root";
    try {
        $connexion = new PDO("mysql:host=$serveur;dbname=test2",$login);
        $insertion = "INSERT INTO id(nom,prenom,email)
        VALUES ('Giraud', 'Pierre', 'pierregiraud@edhec.com')";

        $connexion->exec($insertion);
        echo 'Valeurs bien insrées';
    }
    catch(PDOException $e){
        echo 'Echec de la connexion :'.$e->getMessage();
    }
    ?>
    <p>bonjour</p>

</body>
</html>