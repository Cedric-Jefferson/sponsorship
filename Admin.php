<?php

include 'scripts/php/functions.php';

$bdd = bdd_access();

$filleuls = $bdd->query('SELECT * FROM filleuls');

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <title> Admin's Corner </title>
    </head>
    <body>
        <ul>
            <?php 
                while ($f = $filleuls->fetch()){ ?>
                    <li><?= $f['nom'] ?> : <?= $f['prenom'] ?>
                        <?php 
                            if($f['matricule'] == 0){
                        ?>
                            - <a href="index.php?matricule=<?= $f['id_filleul'] ?>"> Confirmer </a><?php } ?>
                            - <a href="index.php?classe=<?= $f['id_filleul'] ?>"> Supprimer </a>
                    </li>
                        <?php } ?>
        </ul>
    </body>
</html>