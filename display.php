<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $connection = new mysqli("localhost","root","root","assignment3");
    
    $query = "SELECT * FROM registerform";

    $response= mysqli_query($connection,$query);
    ?>
    
    <table>
        <thead>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
        </thead>
        <tbody>
        <?php
        while($row =mysqli_fetch_assoc( $response))
        {
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["password"]."</td>";
            echo "</tr>";
        }

        ?>
        </tbody>
    </table>
</body>

</html>