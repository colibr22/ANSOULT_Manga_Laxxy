<?php
require "pdo.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $sql = "SELECT manga.id, manga.titre, manga.annee_publication, manga.descriptions, auteu.nom, personnage.nom
            FROM manga
            INNER JOIN  manga.auteur_id = auteur.nom
            INNER JOIN  manga.personnage1_id = personnage.nom
            INNER JOIN  manga.personnage2_id = personnage.nom";
    $stmt = $dbPDO->prepare($sql);
    $stmt->execute();
    $mangas = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<?php
    echo "".$_GET['manga.id'];
    echo "<h1>". htmlspecialchars($manga['titre']) . "</h1>" . "<br> " . htmlspecialchars($manga['auteur.nom']) . " - " htmlspecialchars($manga['manga.annee_publication']) . 
    "<br>" . htmlspecialchars($manga['descriptions']) . </body>
    </html>;
?>
</body>
</html>