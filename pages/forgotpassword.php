<?php 
include "config.php";
if (!isset($_SESSION['user'])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include __DIR__.'/head.php'; ?>
</head>

<body>

  <div class="container">
    <div class="row">
     <div class="col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><b>Reset Password</b></h3>
        </div>
        <div class="text-center mb-4">
          <h4>Forgot your password?</h4>
          <p>Enter your email address and we will delete your account.</p>
        </div>
        <div class="panel-body">
          <form action="" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus" name="email" style="height: 44px;">
              </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit" name="btnreset" style="margin: 8px 0;">Reset Password</button>
          </form>

          <?php 

          if (isset($_POST['btnreset'])) {

            $email = mysqli_real_escape_string($db, $_POST['email']);

            $cekaccount = mysqli_query($db, "SELECT * FROM `reglogin` WHERE email = '$email'");

            if (mysqli_num_rows($cekaccount) == TRUE) {
              mysqli_query($db, "DELETE FROM reglogin WHERE reglogin. email = '$email'");
              echo "<br><div class='alert alert-success' role='alert'>Record deleted successfully</div>";
              echo "<meta http-equiv='refresh' content='1;url=register.php'>";
            } else {
              echo "<br><div class='alert alert-danger' role='alert'>No record data</div>";
            }
          }

          ?>

          <div class="text-center">
            <a class="d-block small mt-3" href="register.php">Register an Account</a> |
            <a class="d-block small" href="login.php">Login Page</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include __DIR__.'/js.php'; ?>

</body>
</html>
