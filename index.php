<?php
/**
 * Created by PhpStorm.
 * User: Ochieng_Derrick
 * Date: 2/23/2018
 * Time: 8:27 AM
 */

?>

<html>
<head>
    <title></title>
    <link href="plugins/fancybox/jquery.fancybox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/index.css" />
</head>
<body>
<nav class="navbar navbar-light bg-faded" style="opacity: 0.9;">
    <div class="row">
        <div class="col-sm-3">
            <a class="navbar-brand" href="#">
                <span class="navbar-text text-success"><b>ST. MICHAELS</b></span>
            </a>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xm-12 text-center">
            <a href="#">Home</a>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xm-12 text-center">
            <a href="#">Registration</a>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xm-12  text-center">
            <a href="#">Jumuiya</a>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xm-12 text-center">
            <a href="#">Download</a>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xm-12 text-center">
            <a href="includes/gallery.php">Gallery</a>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xm-12 text-center">
            <a href="#">About Us</a>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xm-12 text-center">
            <a href="#">Contact</a>
        </div>
        <div class="col-sm-2"></div>
    </div>
</nav>
  <main>
      <?php
       $dir = glob('img/{*.jpg,*.png}', GLOB_BRACE);
       foreach ($dir as $key=> $value ) {

           ?>
           <div class="thumbnail">
              <a href="<?php echo $value; ?>" data-fancybox="images" data-caption="My Caption">
                  <img src="<?php echo $value; ?>" alt="<?php $value;?>">
              </a>
               <div class="text-center">
                      <?php
                      $db = mysqli_connect("localhost", "root", "", "photos");
                      $sql = "SELECT * FROM images";
                      $result = mysqli_query($db, $sql);
                      while ($row = mysqli_fetch_array($result)){}
                        echo '<p class="lead">' .$row["text"]. '</p>';
                      ?>
               </div>
           </div>

        <?php
          }
      ?>
  </main>
  <script src="plugins/jquery/jquery-3.2.1.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
</body>
</html>
