<?php
  include("Db.php");
  $warning = false;
  $sucess = false;
  $message = "";







  if(isset($_POST["update"])){
    $UserId = $_POST["user-id"];
    $UserName = $_POST["user-name"];
    $UserEmail = $_POST["user-email"];
    $UserPass = $_POST["user-pass"];
    // $UserConfirmPass = $_POST["user-cnp-pass"];
    // if($UserPass == $UserConfirmPass){
      $UpdateQuery= "UPDATE `register` SET `e_name` = '$UserName' , `e_email` = '$UserEmail', `e_pass` = '$UserPass' WHERE `e_id` = '$UserId' ";
      $myQuery =  mysqli_query($connection,$UpdateQuery);
      if(mysqli_affected_rows($connection)>0){
        $sucess = true;
        $message = "Your Account has been Update";
      }
      else{
        $warning = true;
        $message = "Sorry Error occur while Updating an account";
      }
    }

    // else{
    //   $warning = true;
    //   $message = "Password and Confirm Password are not match";
    // }
//   }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

  <?php
    if($sucess){
      echo "
      <div class='alert alert-success' role='alert'>
        ".$message."
      </div>
      " ;
    }
    if($warning){
      echo "
        <div class='alert alert-warning' role='alert'>
          ".$message."
        </div>
      ";
    }
   ?>

  <div class="container">
    <h1>UPDATE Form</h1>
    <form method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1">ID</label>
      <input type="text" class="form-control"  name="user-id" aria-describedby="emailHelp" disabled value="<?php echo htmlspecialchars($_GET["user-id"]);?>" placeholder="Enter User ID">
     
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Full Name</label>
      <input type="text" class="form-control" name="user-name" aria-describedby="emailHelp" placeholder="Enter User">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="user-email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="user-pass" placeholder="Password">
    </div>
    <!-- <div class="form-group">
      <label for="exampleInputPassword1">Confirm Password</label>
      <input type="password" class="form-control" name="user-cnp-pass" placeholder="Password">
    </div> -->
    
    <input type="submit"  class="btn btn-primary" value="Update" name="update">

</form>


  </div>
 
</body>
</html>l