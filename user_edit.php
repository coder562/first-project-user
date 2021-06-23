<?php
include "db_conn.php";
$id=$_GET['a'];
$data="select * from user where id=$id";
$a=mysqli_query($conn,$data);
$b=mysqli_fetch_array($a);


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
  img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	
</head>
<body style="background-color: cyan;">
	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTx-Eg8XhZ5wVnqLP_RBBsa-n_yjn0YeEhWRg&usqp=CAU"  style="width:600px;">
  <br>
	<!-- name,email,password,image -->
<div class="container">
<form action="user_update.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $b['id'] ?>">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $b['name'] ?>" >
          </div>
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $b['email'] ?>">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $b['password'] ?> ">
        </div>
        <div class="form-group">
          <input type="file" class="form-control" placeholder="Image" name="image" value="<?php echo $b['image'] ?>" >
          <img src="<?php echo $b['image']?>" style="width: 50px; height:50px; border-radius: 70px;">
  			<small class="form-text text-muted">Upload Your File</small>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Update</button>
        </div>
                
    </form>
</div>

</body>
</html>