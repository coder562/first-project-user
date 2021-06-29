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
  
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTx-Eg8XhZ5wVnqLP_RBBsa-n_yjn0YeEhWRg&usqp=CAU" class="w-100"  style="width:600px;">
  <br>
 
  <div class="container">
    <div class="login-form">
      <form action="btech_insert.php" method="post" enctype="multipart/form-data">
        <h2 class="text-center">B.TECH</h2>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $_SESSION['name']?>">
        </div>
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $_SESSION['vaishali']?>">
        </div>
        <div class="form-group">
          <input type="number" class="form-control" placeholder="Phone Number" name="number">
        </div>
        <div class="form-group">
          <label>Gender</label><br>
          <input type="radio" value="male" name="gender" >Male
          <input type="radio" value="female" name="gender" >Female
          <input type="radio" value="others" name="gender" >Others
          </div>
        <div class="form-group">
          <label>Stream</label>
          <select class="form-control" name="stream" >
            <option>Select</option>
            <option>CS</option>
            <option>IT</option>
            <option>M.E</option>
            <option>E.C</option>
            <option>Civil</option>
            <option>E.E</option>
            <option>OTHERS</option>
          </select>
        </div>
        <div class="form-group">
          <label>Qualifications</label><br>
          <input type="checkbox" name="qualifications[]" value="10th">10th<br>
          <input type="checkbox" name="qualifications[]" value="12th">12th<br>
          <input type="checkbox" name="qualifications[]" value="iit mains">iit mains<br>
          <input type="checkbox" name="qualifications[]" value="iit adavnced">iit adavnced
        </div>
        <div class="form-group">
          <label>Address</label>
          <textarea class="form-control"  rows="3" name="address" ></textarea>
        </div>
        <div class="form-group">
          <input type="file" class="form-control"  name="image" >10th marksheet
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-danger btn-block">Submit</button>
        </div>
              
    </form>
  </div>
</div>
  
  
</body>
</html>