<?php 
    if(isset($_POST['send'])){
        // Vérifier si les champs du formulaire sont définis et non vides
        if(isset($_POST['Libelle']) && 
           isset($_POST['Description']) && 
           isset($_POST['Date_creation']) 
           /*$_POST['Libelle'] != "" && 
           $_POST['Description'] != "" && 
           $_POST['Date_creation'] != "" */) {

            require_once "config.php";

            // Récupérer les valeurs directement à partir de $_POST
            $libelle = $_POST['Libelle'];
            $description = $_POST['Description'];
            $date_creation = $_POST['Date_creation'];

            $sql = "INSERT INTO idee (libelle, description, date_creation)  VALUES ('$libelle','$description','$date_creation')";
            if (mysqli_query($connexion, $sql)) {
                header("location:showIdee.php");
            } else {
                header("location:showIdee.php?message=Ajout Echouer");
            }
        } else {
            header("location:showIdee.php?message=Ajout Reussi");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
  
   <form action="" method="post">
       <h1>Ajoutez vos idées</h1>
           <label for="Libelle">Libellé:</label>
           <input type="text" name="Libelle" >


           <label for="Description">Description:</label>
           <input type="text"  name="Description" >


           <label for="date">Date_Creation:</label>
           <input type="Date" name="Date_creation" >
      
       <input type="submit" value="Ajoutez" name="send">
       <a class="link back" href="showIdee.php"> Annulez</a>
   </form>




</body>
</html>










