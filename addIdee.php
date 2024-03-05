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
    require_once 'addIdee.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
    
</head>
<style>
    .form {
    width: 400px;
    margin: 250px auto;
    padding: 20px;   
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form h1 {
    text-align: center;
    margin-bottom: 20px;
}

.form label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

.form input[type="text"],
.form input[type="date"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #68020F;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.form input[type="submit"]:hover {
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
.banner{
    background-image: url("images/Image\ collée 3\.png");
}

</style>
<body>
  
   <form  class="form" action="" method="post">
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

<div class="banner">
     
</div>


</body>
</html>










