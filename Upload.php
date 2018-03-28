<?php
/**
 * Created by PhpStorm.
 * User: Ochieng_Derrick
 * Date: 2/23/2018
 * Time: 11:28 AM
 */

$msg = "";
if (isset($_POST['upload'])){
//path to store the uploaded images
$target = "C:/WampServer/wamp64/www/Gallery/img/".basename($_FILES['image']['name']);

$db = mysqli_connect("localhost", "root", "", "photos");

$image = $_FILES['image']['name'];
$text = $_POST['text'];

$sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
mysqli_query($db, $sql);

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
$msg = "Image uploaded Successfully";
}else{
$msg = "Failed to Upload Image";
}
}

?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap.css" />
</head>
<body>
<div class="container-fluid">
    <div class="col-lg-4 col-md-5 col-sm-8 col-xs-10" style="margin: 150px auto; padding: 10px;">
        <form method="post" action="" enctype="multipart/form-data">
            <?php
               echo $msg;
            ?>
            <input type="hidden" name="size" value="1000000">
            <div class="text-center" style="margin: 10px;">
                <input type="file" name="image">
            </div>
            <div class="text-center" style="margin: 10px;">
                <textarea name="text" cols="40" rows="4" placeholder="Say Something about this pic"></textarea>
            </div>
            <div class="text-center" style="margin: 10px;">
                <button type="submit" class="btn btn-outline-primary" name="upload">Upload</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
