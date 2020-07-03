<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List user</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <?php 
     include "menu.php"; 
     ?>
    <table>
        <tr>
            <th>STT</th>
            <th>UserName</th> 
            <th>PassWord</th>
        </tr>
        <?php
        include "connect.php";
        $sql = "SELECT * FROM user";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td>
                    <?php echo $row["id"]; ?>
                </td>
                <td>
                    <?php echo $row["username"]; ?>
                </td>
                <td>
                    <?php echo $row["password"]; ?>
                </td>
            </tr>
            <?php
        }
        } else echo "Chua co nguoi dung nao";
 
        $conn->close();
        ?>
    </table>
</body>
</html>