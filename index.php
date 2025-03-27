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
    <h1>Top manga :</h1>
    <ul>
        <?php
            $sql = "SELECT titre, annee_publication FROM manga ORDER BY annee_publication";
            $stmt = $dbPDO->prepare($sql);
            $stmt->execute();
            $mangas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($mangas as $manga) {
                echo "<li>" . htmlspecialchars($manga['titre']) . "<br> " . htmlspecialchars($manga['annee_publication']) . "  " . "</li>";
            }
        ?>
    </ul>
    
</body>
</html>