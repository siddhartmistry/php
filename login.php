<?php 
$connection = new mysqli("localhost","root","root","assignment3");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["submit"]))
    {
        if( $_POST["captcha"] == $_SESSION["code"])
        {
            $email = $_POST["email"];
            $password=$_POST["password"];
            $query = "SELECT * FROM registerform where email='{$email}' and password='{$password}'" ;
            $response = mysqli_query($connection,$query);
            $count = 0;
            while($r = mysqli_fetch_array($response))
            {
                $count++;
            }
            if($count>0)
            {
                $_SESSION["user"]="active";
                header('Location: category.php');
            }
        }
        else
        {
            echo "<h6>Captcha invalid<h6>";
        }
        
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="#" method="POST">
       Email :  <input type="email" name="email" ><br>
       Password : <input type="password" name="password"> <br>
        enter captcha <input type="text" name="captcha"> <br>
        <img src="./captcha.php" >
        <input type="submit" name="submit" value = "submit">
    </form>
</body>
</html>