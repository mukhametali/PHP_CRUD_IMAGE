<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Image</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <label for="">Name:</label>
                <input type="text" name="name"><br>
                <label for="">Price:</label>
                <input type="text" name="price" id=""><br>
                <label for="">Image:</label>
                <input type="text" name="image" id=""><br>
                <button name="upload" type="submit">Upload</button>
            </form>
        </div>
    </center>
</body>
</html>