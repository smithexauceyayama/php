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
        $connexion = new PDO("mysql:host=$serveur;dbname=test",$login);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $codesql = "CREATE TABLE visiteurs(
        id INT UNSIGNED AUTO_INCREMENT
        prenom
        nom
        email
        )";
        echo 'Connexion à la base des données reussi !!!';
    }
    catch(PDOException $e){
        echo 'Echec de la connexion :'.$e->getMessage();
    }
    ?>
    <p>bonjour</p>

</body>
</html>