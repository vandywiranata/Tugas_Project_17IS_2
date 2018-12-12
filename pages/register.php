<?php
include "lib.php";
userverifikasi();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include __DIR__.'/head.php'; ?>
</head>

<body>

  <div id="wrapper">
    <?php include __DIR__.'/layout/navbar.php'; ?>
    <?php include __DIR__.'/layout/sidebar.php'; ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Register</h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>

      <form action="" method="post" class="">
        <div class="col-md-12">
          <label for="firstName">First name</label>
          <input type="text" id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus" name="firstName">
        </div>
        <div class="col-md-12">
          <label for="lastName">Last name</label>
          <input type="text" id="lastName" class="form-control" placeholder="Last name" required="required" name="lastName">
        </div>
        <div class="col-md-12">
          <label for="Email">Email address</label>
          <input type="email" id="Email" class="form-control" placeholder="Email address" required="required" name="email">
        </div>
        <div class="col-md-12">
          <label for="Password">Password</label>
          <input type="password" id="Password" class="form-control" placeholder="Password" required="required" name="password1">
        </div>
        <div class="col-md-12">
          <label for="confirmPassword">Confirm password</label>
          <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required" name="password2">
        </div>
        <div class="col-md-12" style="margin-top: 5px">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
          <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
        </div>
        <div class="col-md-12">
          <button class="btn btn-success btn-block" type="submit" name="btnregister" style="margin-top: 5px;">Register</button>
        </div>
        <div class="col-md-12">
          <button class="btn btn-danger btn-block"  type="reset" style="margin: 8px 0;">Reset</button>
        </div>
      </form>

      <?php 

      if (isset($_POST['btnregister'])) {

        $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
        $lastName  = mysqli_real_escape_string($db, $_POST['lastName']);
        $email     = mysqli_real_escape_string($db, $_POST['email']);
        $password1 = mysqli_real_escape_string($db, $_POST['password1']);
        $password2 = mysqli_real_escape_string($db, $_POST['password2']);

        $cekaccountemail = mysqli_query($db, "SELECT * FROM `reglogin` WHERE email = '$email'");

        if (mysqli_num_rows($cekaccountemail) == TRUE) {
          echo "<br><div class='alert alert-danger' role='alert'>Email have been registered</div>";
        }else if ($password1 == $password2) {
          mysqli_query($db,"INSERT INTO reglogin (firstName,lastName,email,password) VALUES ('$firstName', '$lastName', '$email', '$password1')");        
          echo "<br><div class='alert alert-success' role='alert'>Register Success</div>";
          echo "<meta http-equiv='refresh' content='1;url=register.php?status=registersukses'>";
        }else if ($password1 !== $password2) {
          echo "<br><div class='alert alert-danger' role='alert'>Password Not Same</div>";
        }
      }

      ?>

    </div>
    <?php include __DIR__.'/layout/footer.php'; ?>
  </div>

  <?php include __DIR__.'/js.php'; ?>

</body>

</html>
