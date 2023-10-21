<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<body>
    <form action="productmanagement.php" method="post" name="updateform">
        id : <input type="number" name="id"><br>
        category :<input type="text" name="categoryid"> <br>
        name : <input type="text" name="name"><br>
        file : <input type="file" name="files"> <br>
        <input type="submit" name="update" value="submit">
    </form>
</body>
</html>