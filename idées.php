<?php

require_once 'navbar.html';
require_once 'showIdee.php';
require_once 'config.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400;700&display=swap');

        body {
        margin: 0;
        background-color: #FFFFFE;
}
header{
    display: flex;
    background-color: #68020F;
}
.nav_bar {
    width : 100%;
    display: flex;
    gap: 80px;
    justify-content: center;
    margin-left: 1000px;
    margin-top: 40px;
    
}
.nav_bar a {
    text-decoration: none;
    color:aliceblue;
  
}
.icone {
   margin-bottom: 10px;
    margin-top: 40px;
    margin-left: 50px;
    vertical-align: middle;
  
}
.icone a {
    text-decoration: none;
    color:aliceblue;

}
</style>
<header>
    <div class="icone">
        <img src="images/Image collée 1.png" alt="" width="50px ">
        <a href="index.php">Boite_idee</a>
    </div>
    <div class="nav_bar">
        <div><a href="navbar.html"><h3>ACCUEIL</h3></a></div>
        <div><a href="idées.php"><h3>NOS IDEES</h3></a></div>
        <div><a href=""><h3>DECONNEXION</h3></a></div>
    </div>
</header>

</body>
</html>