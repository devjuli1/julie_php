<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="link_container">
            <a class="link" href="add_User.php">Ajouter un apprenant</a>
        </div>
        <table>
            <thead>
                <!-- inclusion de la connexion -->
                <?php
                include_once "connect_ddb.php";
                // Afficher la liste des utilisateurs
                $sql= "SELECT * FROM `apprenant`";
                $result= mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0){
                    // Afficher les utilisateurs
                ?>
                <tr>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>date_naissance</th>
                    <th>ville_origine</th>
                    <th>formation_base</th>
                    <th>Modifier</th>
                    <th>supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?=$row['nom']?></td>
                    <td><?=$row['prenom']?></td>
                    <td><?=$row['date_naissance']?></td>
                    <td><?=$row['ville_origine']?></td>
                    <td><?=$row['formation_base']?></td>
                    <td class="image"><a href="modify_User.php?id=<?=$row['id']?>"> <img src="images/write.png" alt=""></a></td>
                    <td class="image"><a href="delete_User.php?id=<?=$row['id']?>"> <img src="images/remove.png" alt=""></a></td>
                </tr>
                <?php
                 }
                  }
                 else{
                    echo "<p class='message' >0 apprenant présent!</p>";
                 }
                 ?>
            </tbody>
        </table>
    </main>
</body>
</html>




















    <!-- <div class="link_contenair">
    <a class="link" href="addUser.php">Ajouter un utilisateur</a>
</div>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>text</td>
            <td>text</td>
            <td class="image" ><a href="modifyUser.php?id="><img src="../image/write.png" alt=""></a></td>
            <td class="image"><a href="deleteUser.php?id="><img src="../image/remove.png" alt=""></a></td>
        </tr>
    </tbody>
</table> -->



</body>
</html>
