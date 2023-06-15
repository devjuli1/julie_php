<?php
if(isset($_POST['send'])){
    if(isset($_POST['nom']) &&
    isset($_POST['prenom']) &&
    isset($_POST['date_naissance']) &&
    isset($_POST['ville_origine']) &&
    isset($_POST['formation_base']) &&
    // verifier que les valeurs username et email exisent ne sont pas vide.Cette condition est dans la première condition. 
    $_POST['nom']!= "" &&
    $_POST['prenom']!= "" &&
    $_POST['date_naissance']!= "" &&
    $_POST['ville_origine']!= "" &&
    $_POST['formation_base']!= ""
    ) { 
        include_once "connect_ddb.php";
        extract($_POST);
        $sql = "INSERT INTO `apprenant` (`nom`, `prenom`, `date_naissance`, `ville_origine`, `formation_base`) VALUES ('$nom', '$prenom', '$date_naissance', '$ville_origine', '$formation_base')";
        if(mysqli_query($conn, $sql)) {
            header("location:add_User.php");
        } 
        else{
            header("location:show_User.php?message=AddFail");
        }
    }
    else{
        header("location:show_User.php?message=emptyfields");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <h1>Ajouter un apprenant</h1>
        <label for="">Nom</label>
        <input type="text" name="nom" placeholder="Nom">
       <input type="text" name="prenom"  placeholder="Prenom">
       <input type="date" name="date_naissance" placeholder="Date de naissance">
       <input type="text" name="ville_origine"  placeholder="Ville d'origine">
       <input type="text" name="formation_base"  placeholder=" veuillez entre votre Formation de base">
        <input type="submit" value="AJouter" name="send">
        <a class="link back" href="show_User.php">Annuler</a>
    </form>
    
</body>
</html>