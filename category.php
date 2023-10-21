<?php
$connection = new mysqli("localhost","root","root","assignment3");
$response = $_SERVER["REQUEST_METHOD"];
session_start();
if(!isset($_SESSION["user"]))
{
    header('Location: login.php');
}

if($response == "POST")
{
    if(isset($_POST["add"]))
    {
        $category = $_POST["category"];
        $query = "insert into category set category = '{$category}'";
    }
    else if(isset($_POST["update"]))
    {
        $id = $_POST["id"];
        $category = $_POST["category"];
        $query = "update category set category='{$category}' where id={$id}";
    }
    if(mysqli_query($connection,$query))
    {
        echo "operation done";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="product.php">Manage Product</a>
    <br>
    <br>
    <form action="#" method="post" name="addform">
        category   : <input type="text" name="category">
        <br>
        <input type="submit" name="add" value="submit">   
    </form>
    <form action="#" method="post" name="updateform">
        id: <input type="number" name="id"><br>
        new category : <input type="text" name="category">
        <br>
        <input type="submit" name="update" value="update">
    </form>

    <table border="1">
        <thead>
            <th>ID</th>
            <th>Name</th>
        </thead>
        <tbody>
        <?php 
            $getall = "select * from category";
            $val = mysqli_query($connection,$getall);
            while($result = mysqli_fetch_assoc($val))
            {
                echo "<tr>";
                echo "<td>".$result["id"]."</td>";
                echo "<td>".$result["category"]."</td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
    
</body>
</html>