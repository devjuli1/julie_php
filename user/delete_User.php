<?php
$id = $_GET['id']
 ?>
 <?php include_once "connect_ddb.php";
$sql = "DELETE FROM apprenant where id= $id"; 
if(mysqli_query($conn, $sql)) {
    header("location: show_User.php?message=DeleteSuccess");
    } else{
        header("location: show_User.php?message=DeleteFail");
}
?>