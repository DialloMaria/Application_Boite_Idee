


<?php
require_once "config.php";

$query = "SELECT * FROM categorie";
$result = mysqli_query($connexion, $query);

if(mysqli_num_rows($result) > 0) {
    echo '<div class="row row-cols-1 row-cols-md-2 g-4">';
    while($row = mysqli_fetch_assoc($result)) {
        echo '<div class="col">';
        echo '<div class="card">';
        echo '<img src="' . $row['Photo'] . '" class="card-img-top" alt="' . $row['Nom'] . '">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $row['Nom'] . '</h5>';
        echo '<p class="card-text">' . $row['Description'] . '</p>';
        echo '<a href="idea_categorie.php?categorie_id=' . $row['Id'] . '" class="btn btn-primary">Voir les idées</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "Aucune catégorie disponible pour le moment.";
}

mysqli_close($connexion);
?>

