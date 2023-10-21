<?php 
$connection = new mysqli("localhost","root","root","assignment3");
$query="";

if(isset($_POST["btnadd"]))
{
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $query = "insert into registerform set name='{$name}' , email='{$email}' , password='{$password}'";
  
}
else if(isset($_POST["btnupdate"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $id= $_POST["id"];

    $query="update registration set name='{$name}' , email='{$email}' , password='{$passwod}' where id=".$id;


}
else if(isset($_POST["btndelete"]))
{
    $id= $_POST["id"];
    $query = "delete from registration where id=".$id;
}

try
{
    if($query != "")
    {
        if(mysqli_query($connection,$query))
        {
            echo "complete";
        }
    }
    
}
catch (Exception $e) { }






?>