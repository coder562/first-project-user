<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<div class="container">

	<table class="table table-bordered">
		<h1 class="text-center bg-primary" style="color: #fff;">BTECH Data</h1>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>Gender</th>
			<th>Stream</th>
			<th>Qualifications</th>
			<th>Address</th>
			<th>Image</th>
			
		</tr>


<!-- <h1>View</h1> -->
<?php
include "db_conn.php";
$id=$_GET['a'];
$data="select * from btech where id = $id";
$a=mysqli_query($conn,$data);
$b=mysqli_fetch_array($a);
// echo "<pre>";
// print_r($b);
?>

<tr>
	<td><?php echo $b['id'] ?></td>
	<td><?php echo $b['name'] ?></td>
	<td><?php echo $b['email'] ?></td>
	<td><?php echo $b['number'] ?></td>
	<td><?php echo $b['gender'] ?></td>
	<td><?php echo $b['stream'] ?></td>
	<td><?php echo $b['qualifications'] ?></td>
	<td><?php echo $b['address'] ?></td>
	<td><img src="<?php echo $b['image']?>" style="width: 50px; height:50px; border-radius: 70px;"></td>
	
	
	</tr>
</table>
</div>
</body>
</html>