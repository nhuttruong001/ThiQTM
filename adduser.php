<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert USER</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    include "menu.php";
    if(isset($_POST["submit"])){
        include "connect.php";
        $sql = "INSERT INTO user (username,password)
        VALUES ('".$_POST["username"]."','".$_POST["password"]."')";

        if ($conn->query($sql) === TRUE) {
            echo "Created ".$_POST["username"]. " successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else { 
        ?>
    <h3>Thêm User</h3>
    <form method="POST">
        <input type="text" name="username" placeholder="type your username">
        <input type="text" name="password" placeholder ="type your password">
        <input type="submit" name="submit">
    </form>
<?php  } ?>
</body>
</html>