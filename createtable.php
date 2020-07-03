<?php
    include "connect.php";
    // sql to create table
    $sql = "CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
      echo "Table user created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }

    $conn->close();
?>