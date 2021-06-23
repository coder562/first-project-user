<?php
include "db_conn.php";
$id=$_GET['a'];
$data="select * from btech where id=$id";
$a=mysqli_query($conn,$data);
$b=mysqli_fetch_array($a);
$f=$b['qualifications'];
$c=explode(',',$f);



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
	<div class="container">
    <div class="login-form">
      <form action="btech_update.php" method="post" enctype="multipart/form-data">
        <input type="text" name="id" value="<?php echo $b['id'] ?>">
        <h2 class="text-center">B.TECH</h2>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $b['name'] ?>" >
        </div>
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $b['email'] ?>">
        </div>
        <div class="form-group">
          <input type="number" class="form-control" placeholder="Phone Number" name="number" value="<?php echo $b['number'] ?>" >
        </div>
        <div class="form-group">
          <label>Gender</label><br>
          <input type="radio" value="male" name="gender"
          <?php
          if($b['gender']=='male'){
            echo "checked";
          }

          ?>
          >Male
          <input type="radio" value="female" name="gender"
          <?php
          if($b['gender']=='female'){
            echo "checked";
          }

          ?>
          >Female
          <input type="radio" value="others" name="gender"
          <?php
          if($b['gender']=='others'){
            echo "checked";
          }

          ?>
          >Others
          </div>
        <div class="form-group">
          <label>Stream</label>
          <select class="form-control" name="stream" >
            <option>Select</option>
            <option value="CS"
            <?php
            if($b['stream']=='CS'){
              echo "selected";
            }
            ?>
            >CS</option>
            <option value="IT"
            <?php
            if($b['stream']=='IT'){
              echo "selected";
            }
            ?>
            >IT</option>
            <option value="M.E"
            <?php
            if($b['stream']=='M.E'){
              echo "selected";
            }
            ?>
            >M.E</option>
            <option value="E.C"
            <?php
            if($b['stream']=='E.C'){
              echo "selected";
            }
            ?>
            >E.C</option>
            <option value="Civil"
            <?php
            if($b['stream']=='Civil'){
              echo "selected";
            }
            ?>
            >Civil</option>
            <option value="E.E"
            <?php
            if($b['stream']=='E.E'){
              echo "selected";
            }
            ?>
            >E.E</option>
            <option value="OTHERS"
            <?php
            if($b['stream']=='OTHERS'){
              echo "selected";
            }
            ?>
            >OTHERS</option>
          </select>
        </div>
        <div class="form-group">
          <label>Qualifications</label><br>
          <input type="checkbox" name="qualifications[]" value="10th"
          <?php
          if(in_array('10th',$c)){
            echo "checked";
          }

          ?>
          >10th<br>
          <input type="checkbox" name="qualifications[]" value="12th"
          <?php
          if(in_array('12th',$c)){
            echo "checked";
          }

          ?>
          >12th<br>
          <input type="checkbox" name="qualifications[]" value="iit mains"
          <?php
          if(in_array('iit mains',$c)){
            echo "checked";
          }

          ?>
          >iit mains<br>
          <input type="checkbox" name="qualifications[]" value="iit adavnced"
          <?php
          if(in_array('iit advanced',$c)){
            echo "checked";
          }

          ?>

          >iit adavnced
        </div>
        <div class="form-group">
          <label>Address</label>
          <textarea class="form-control"  rows="3" name="address" value=""><?php echo $b['address'] ?></textarea>
        </div>
        <div class="form-group">
          <input type="file" class="form-control"  name="image" value="<?php echo $b['image'] ?>" >10th marksheet
          <img src="<?php echo $b['image']?>" style="width: 50px; height:50px; border-radius: 70px;">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-danger btn-block">Submit</button>
        </div>
                
    </form>
  </div>
</div>

</body>
</html>