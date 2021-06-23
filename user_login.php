<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>
    User Panel
  </title>
  <script>
  $('#myModal').on('shown.bs.modal', function (e) {
  // do something...
})
</script>
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
  <div class="container">
    <div class="login-form">
      <form action="login_insert.php" method="post">
        <h2 class="text-center">Log in</h2>
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email" name="email" >
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" name="password" >
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
          <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
          <a href="#" class="float-right">Forgot Password?</a>
        </div>        
    </form>
  </div>
</div>

<center><button type="button" class="btn btn-primary btn-lg text-center" data-toggle="modal" data-target="#myModal">Sign in or Create an Account</button></center>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title text-center">Create your Account</h4>
      </div>
      <div class="modal-body">
        <form action="user_insert.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Name" name="name" >
          </div>
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email" name="email" >
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" name="password" >
        </div>
        <div class="form-group">
          <input type="file" class="form-control" placeholder="Image" name="image" >
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Sign in</button>
        </div>
        <div class="clearfix">
          <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
        </div>        
    </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  
  
  
</div>
</body>
<!-- <script>
  $('#myModal').modal('show')
  </script> -->
</html>