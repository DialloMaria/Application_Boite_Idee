<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des idées</title>
    <link rel="stylesheet" href="style.css">
    <?php
    require_once 'navbar0.html';
    ?>
</head>
<body>
    
    <main class="tout"> 
        <div class="link_container">
            <a href="addIdee.php"><h1>Ajoutez vos Idées</h1></a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Libelle</th>
                    <th>Description</th>
                    <th>Date_Creation</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                    <th>details</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require_once "config.php";
                // Liste des idées depuis la base de données
                $sql = "SELECT * FROM idee";
                $result = mysqli_query($connexion, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?=$row['libelle']?></td>
                    <td><?=$row['description']?></td>
                    <td><?=$row['date_creation']?></td>
                    <td class="image"><a href="modifyIdee.php?id=<?=$row['id']?>"><img src="images/write.png" alt=""></a></td>
                    <td class="image"><a href="delete.php?id=<?=$row['id']?>"><img src="images/remove.png" alt=""></a></td>
                    <td><a href="details.php?id=<?=$row['id']?>"><button class="details">vos details</button></a></td>
                </tr>
            <?php
                    }
                } else {
                    echo "<tr><td colspan='4'>Aucune idée trouvée !</td></tr>";
                }
                mysqli_close($connexion);

                
            ?>
            </tbody>
        </table>
    </main>
</body>
</html>
