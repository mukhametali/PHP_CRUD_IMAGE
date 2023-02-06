<?php
// include db connection
require_once "config.php";

if (isset($_POST['upload']))
{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    print_r($_FILES['image']);
    $imgLoc = $_FILES['image']['tmp_name'];
    $imgName = $_FILES['image']['name'];
    $imgDes = "uploadImage/" .$imgName;
    move_uploaded_file($imgLoc, 'uploadImage/' .$imgName);

    //insert data

    mysqli_query($connection, "INSERT INTO `tblcrud`(`name`, `price`, `image`) VALUES ('$name', '$price', '$imgDes')");

}

