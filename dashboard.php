<?php 
include "session.php";
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>
    User Panel
  </title>
  <style>
  img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
</head>
<body style="background-color: cyan;">
  <nav class="navbar navbar bg-light">
  <a class="navbar-brand primary"><b>ITM UNIVERSITY</b></a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success mx-2" type="submit">Search</button>
    <h3><?php echo $_SESSION['vaishali'] ?></h3>
    <a href="logout.php" class="btn btn-danger mx-2">Logout</a>
  </form>
</nav>
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTx-Eg8XhZ5wVnqLP_RBBsa-n_yjn0YeEhWRg&usqp=CAU"  style="width:600px;">
  <br>
  <h1 class="text-center bg-primary" style="color: #fff;">Welcome to ITM</h1>
  <!-- <p class="text-center">Think Big Think Beyond!</p> -->
  


  <div class="container">
    <div class="row">
      <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://cache.careers360.mobi/media/presets/860X430/article_images/2020/3/2/B.Tech_aGtlUrD.webp" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center"><b>B.TECH</b></h5>
          <p class="card-text">B. Tech or Bachelor of Technology is an undergraduate degree programme in the engineering field. </p>
          <?php
          include "db_conn.php";
          $e=$_SESSION['vaishali'];
          $data="select * from btech where email='$e'";
          $result=mysqli_query($conn,$data);
          $a=mysqli_fetch_array($result);
          // echo "<pre>";
          // print_r($result);
          if(mysqli_num_rows($result)==1){
            
            echo '<a href="btech.php" class="btn btn-primary disabled">Apply now</a>';
            echo '<a href="btech_display.php" class="btn btn-success mx-2">Display</a>';
          }
          else{
            echo '<a href="btech.php" class="btn btn-primary">Apply now</a>';
          }

          ?>
          <!-- <a href="btech.php" class="btn btn-primary">Apply now</a> -->
        </div>
      </div>
    </div>


      <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://blog.mmumullana.org/wp-content/uploads/2018/07/Blog-Creative-MCA.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center"><b>MCA</b></h5>
          <p class="card-text">“MCA (Master of Computer Applications) is a professional master's degree </p>
          
          <a href="#" class="btn btn-primary">Apply now</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://www.insidehighered.com/sites/default/server_files/media/thumbnail_image_2.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center"><b>MBA</b></h5>
          <p class="card-text">MBA is an internationally recognized post-graduate program </p>
          
          <a href="#" class="btn btn-primary">Apply now</a>

        </div>
      </div>
      <!-- <a href="logout.php" class="btn btn-danger">Logout</a> -->

    </div>
  </div>


  
</body>
</html>