<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title></title>
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
	<div class="container">
		<table class="table table-bordered">
			<h1 class="bg-primary text-center" style="color: #fff;">BTECH Data Display</h1>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Image</th>
				<th>Action</th>
				
				
			</tr>
			<?php
			include "db_conn.php";
			$data="select * from btech order by id desc";
			$result=mysqli_query($conn,$data);

			while($a=mysqli_fetch_array($result)){
				// echo "<pre>";
				// print_r($a);
			
			?>
			<tr>
				<td><?php echo $a['id']?></td>
				<td><?php echo $a['name']?></td>
				<td><?php echo $a['email']?></td>
				<td><img src="<?php echo $a['image']?>" style="width: 50px; height:50px; border-radius: 70px;"></td>
				
				<td>
					<a href="btech_view.php?a=<?php echo $a['id']?>" class="btn btn-danger">View</a>
					<a href="btech_edit.php?a=<?php echo $a['id']?>" class="btn btn-danger">Edit</a>
					<a href="btech_delete.php?a=<?php echo $a['id']?>" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>

</body>
</html>