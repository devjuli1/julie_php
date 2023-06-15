<?php
 $apprenant_id = $_GET['id'];
if(isset($_POST['send'])){
    echo 'bien';
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
        $sql ="UPDATE apprenant SET nom= '$nom', prenom= '$prenom', date_naissance= '$date_naissance', ville_origine= '$ville_origine', formation_base='$formation_base' where id = $apprenant_id";
        if(mysqli_query($conn, $sql)){
            header("location:show_User.php");
        } 
        else{
            header("location:show_User.php?message=ModifyFail");
        }
    } 
    else{
            header("location:show_User.php?message=EmptyFields");
        }
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
 include_once"connect_ddb.php";
 // liste des infos apprenants
 $sql= "SELECT * FROM apprenant where id =$apprenant_id";
 $result= mysqli_query($conn, $sql);
// output data of each row
while($row = mysqli_fetch_assoc($result)){
 ?>
    <form action="" method="post">
       <h1>Modifier un apprenant</h1> 
       <input type="text" name="nom" value="<?=$row['nom']?>" placeholder="Nom">
       <input type="text" name="prenom" value="<?=$row['prenom']?>" placeholder="Prenom">
       <input type="date" name="date_naissance" value="<?=$row['date_naissance']?>" placeholder="Date_naissance">
       <input type="text" name="ville_origine" value="<?=$row['ville_origine']?>" placeholder="Ville_origine">
       <input type="text" name="formation_base" value="<?=$row['formation_base']?>" placeholder="Formation_base">
       <input type="submit" value="Modifier" name="send" >
       <a class="link back" href="show_User.php">Annuler</a>
    </form>
    <?php
     }
     ?>
</body>
</html>