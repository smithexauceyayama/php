<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=jeux_video', 'root','');
            }
        catch (Exception $e)
            {
                die ('Erreur : ' . $e->getMessage());
            }

        $reponse = $bdd->query('SELECT * FROM id');
        while ($donnees = $reponse->fetch())
            {
        ?>
        <p>
            <strong>Le nom du jeu est</strong> : <?php echo $donnees['nom']; ?><br>
            <strong>le processeur est</strong> : <?php echo $donnees['processeur']; ?><br>
            <strong>la console est</strong> : <?php echo $donnees['console']; ?><br>
            <strong>le prix est de</strong> : <?php echo $donnees['prix']; ?> $<br>
            <strong>le nombre des joueurs max est de</strong> : <?php echo $donnees['nbr_joueurs_max']; ?><br>
            <strong>le commentaire est de</strong> : <?php echo $donnees['commentaire']; ?><br>
        </p>
        <?php $reponse->closeCursor();
        }
        ?>
   
</body>
</html>