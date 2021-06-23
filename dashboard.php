<?php 
session_start();
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
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTx-Eg8XhZ5wVnqLP_RBBsa-n_yjn0YeEhWRg&usqp=CAU"  style="width:600px;">
  <br>
  <h1 class="text-center bg-primary" style="color: #fff;">Welcome to ITM</h1>
  <!-- <p class="text-center">Think Big Think Beyond!</p> -->
  
<h1><?php echo $_SESSION['vaishali'] ?></h1>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://cache.careers360.mobi/media/presets/860X430/article_images/2020/3/2/B.Tech_aGtlUrD.webp" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">B.TECH</h5>
          <p class="card-text">B. Tech or Bachelor of Technology is an undergraduate degree programme in the engineering field. It is offered in various disciplines like computer science and engineering, civil engineering, mechanical engineering, electrical engineering, electronics engineering etc.</p>
          <a href="btech.php" class="btn btn-primary">Apply now</a>
        </div>
      </div>
    </div>

      <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://www.successcds.net/full-form/wp-content/uploads/2018/12/MCA-300x300.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">MCA</h5>
          <p class="card-text">“MCA (Master of Computer Applications) is a professional master's degree </p>
          <a href="#" class="btn btn-primary">Apply now</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgWX2XEnl4RrD79E8qZmfEZNq6wY_9m9fK12qngfPo2yCCUx8RmjZXtEdbBou7aSivTUM&usqp=CAU" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">MBA</h5>
          <p class="card-text">MBA is an internationally recognized post-graduate program </p>
          <a href="#" class="btn btn-primary">Apply now</a>

        </div>
      </div>
      <a href="logout.php" class="btn btn-danger">Logout</a>

    </div>
  </div>


  
</body>
</html>