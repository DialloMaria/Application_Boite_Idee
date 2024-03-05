<?php require_once 'config.php';?>

<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Échapper les variables pour éviter les injections SQL
    $id = mysqli_real_escape_string($connexion, $id);

    $bdd = "SELECT * FROM idee WHERE id=$id";
    $result = mysqli_query($connexion, $bdd);
    if (!$result){
        die("La requête a échoué" . $connexion->connect_error);
    }
    else{ 
        $row = mysqli_fetch_assoc($result); 
    }
}

// Vérifiez si le formulaire est soumis pour mettre à jour les données
if(isset($_POST['send'])){
    // Récupérez les valeurs des champs du formulaire
            $libelle = $_POST['libelle'];
            $description = $_POST['description'];
            $date_creation = $_POST['date_creation'];


    // Échapper les variables pour éviter les injections SQL
    $libelle= mysqli_real_escape_string($connexion, $libelle);
    $description = mysqli_real_escape_string($connexion, $description );
    $date_creation  = mysqli_real_escape_string($connexion, $date_creation );

    // Requête SQL pour mettre à jour les données dans la base de données
    $sql = "UPDATE idee SET libelle = '$libelle' , description = '$description', date_creation= '$date_creation' WHERE id = $id";
    $result = mysqli_query($connexion, $sql);

    if ($result){
        echo "Les données ont été mises à jour avec succès.";
    } else {
        echo "Erreur lors de la mise à jour des données : " . mysqli_error($connexion);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<style>
    form {
    width: 400px;
    margin: 250px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

input[type="text"],
input[type="date"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #68020F;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #F21137;
}
.link.back {
    display: block;
    text-align: center;
    margin-top: 10px;
    color: #F21137;
    text-decoration: none;
}

.link.back:hover {
    text-decoration: underline;
}

</style>
<body>

<form method="post" action="">
        <h1>Modifiez vos idées</h1>
        <label for="libelle">Libellé</label>
        <input type="text" name="libelle"  value="<?php echo isset($row['libelle']) ? $row['libelle'] : ''; ?>">

        <label for="description">Description</label>
        <input type="text" name="description"  value="<?php echo isset($row['description']) ? $row['description'] : ''; ?>">

    
        <label for="age">Date_Creation</label>
        <input type="date" name="date_creation"  value="<?php echo isset($row['date_creation']) ? $row['date_creation'] : ''; ?>">
 
    <input type="submit" class="btn btn-success" name="send" value="Modifiez">
    <a class="link back"  href="showIdee.php"> Annulez</a>
</form>



</body>
</html>