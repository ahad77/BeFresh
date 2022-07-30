<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php
include 'db_con.php';
if(isset($_POST['signupkor'])){
  $username=mysqli_real_escape_string($con,$_POST['username']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $password=mysqli_real_escape_string($con,$_POST['pwd']);
  $cpassword=mysqli_real_escape_string($con,$_POST['cpwd']);
  $pass=password_hash($password,PASSWORD_BCRYPT);
  $cpass=password_hash($cpassword,PASSWORD_BCRYPT);

  $emailq="select * from signup where email='$email'";
  $q=mysqli_query($con,$emailq);
  $emailcnt=mysqli_num_rows($q);
  if($emailcnt>0){
    ?>
    <script>
    alert('Email already exist!Pls enter new a email address');
    </script>
    <?php
  }else{
    if($password===$cpassword){
      $insert="insert into signup(username,email,password,cpassword) values('$username','$email','$pass','$cpass')";
      $insq=mysqli_query($con,$insert);
      ?>
      <script>
      alert('Registration successful..Now kindly log in');
      // location.replace('login.php');
      </script>
  <?php
    }else{
       ?>
       <script>
       alert('Sorry your password does not match');
       </script>
       <?php
    }
  }
}

?>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
  <div class="form-group">
    <label for="username">username:</label>
    <input type="text" class="form-control" placeholder="Enter username" id="username" name="username">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
  </div>
  
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd">
  </div>

  <div class="form-group">
    <label for="cpwd">Confirm Password:</label>
    <input type="password" class="form-control" placeholder="Enter confirm password" id="cpwd" name="cpwd">
  </div>

  <button type="submit" class="btn btn-primary" name="signupkor">Submit</button>
</form>


</body>
</html>
