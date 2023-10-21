<?php 
$connection = new mysqli("localhost","root","root","assignment3") ;
$query = "";
#region file uploading
{
    if(isset($_POST["add"]))
    {
        //echo "err=".$_FILES['files']['error']."<br>";
        $category =  $_POST["categoryid"];
        $name = $_POST["name"];
        $file =$_FILES["files"]["name"];
        
        //echo "<br>".$_FILES["file1"]["tmp_name"];
    
        if(is_uploaded_file($_FILES["files"]["tmp_name"])){
            copy($_FILES["files"]["tmp_name"],"content/file/".$file."_".$name);
        }
    
        $query = "insert into product set categoryid={$category} , name='{$name}' , file='{$file}'";
        
    }
    #endregion
    
    else if(isset($_POST["update"]))
    {
        $category =  $_POST["categoryid"];
        $name = $_POST["name"];
        $file =$_FILES["files"]["name"];
        $id = $_POST["id"];
        if(is_uploaded_file($_FILES["files"]["tmp_name"])){
            copy($_FILES["files"]["tmp_name"],"content/file/".$_FILES["files"]["name"]);
        }
        $query = "update product set categoryid={$category} , name='{$name}' , file='{$file}' where id={$id}" ;
    }
    
    else if(isset($_POST["delete"]))
    {
        $id = $_POST["id"];
        $query = "delete from product where id={$id}" ;
    }
}



if($query!="")
{
    if(mysqli_query($connection,$query))
    {
        echo "operation done";
    }
}

?>

