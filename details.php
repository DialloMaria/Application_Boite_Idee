<?php
require_once "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM idee WHERE id = $id";
    $result = mysqli_query($connexion, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Aucune idée trouvée avec cet identifiant.";
    }
    mysqli_close($connexion);
} else {
    header("Location: showIdee.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'idée</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1><?=$row['libelle']?></h1>
        <p><?=$row['description']?></p>
        <a href="showIdee.php">Retour à la liste des idées</a>
    </main>
</body>
</html>







