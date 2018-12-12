<?php
include "lib.php";
userverifikasi();

if( !isset($_GET['id']) ){
  header('Location: register.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM reglogin WHERE id=$id";
$query = mysqli_query($db, $sql);
$user = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
  die("data tidak ditemukan...");
}
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
          <h1 class="page-header">Edit User</h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <div class="col-lg-7">
        <form action="" method="post" >
          <div>
            <label for="ID">ID</label>
            <input type="text" id="ID" class="form-control" placeholder="ID" required="required" name="id" value="<?php echo $user['id'] ?>" readonly>
          </div>
          <div>
            <label for="firstName">First name</label>
            <input type="text" id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus" name="firstName" value="<?php echo $user['firstName'] ?>">
          </div>
          <div>
            <label for="lastName">Last name</label>
            <input type="text" id="lastName" class="form-control" placeholder="Last name" required="required" name="lastName" value="<?php echo $user['lastName'] ?>">
          </div>
          <div>
            <label for="Email">Email address</label>
            <input  type="email" id="Email" class="form-control" placeholder="Email address" required="required" name="email" value="<?php echo $user['email'] ?>" readonly>
          </div>
          <div>
            <label for="Password">Password</label>
            <input type="password" id="Password" class="form-control" placeholder="Password" required="required" name="password1">
          </div>
          <div class="modal-footer">
            <a href="useraccount.php" type="button" class="btn btn-warning">Cancel</a>
            <button type="submit" class="btn btn-primary" name="btnedit">Save Changes</button>
          </div>
        </form>
      </div>
      <?php 
      if (isset($_POST['btnedit'])) {

        $id        = mysqli_real_escape_string($db, $_POST['id']);
        $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
        $lastName  = mysqli_real_escape_string($db, $_POST['lastName']);
        $email     = mysqli_real_escape_string($db, $_POST['email']);
        $password1 = mysqli_real_escape_string($db, $_POST['password1']);

        $cek       = mysqli_query($db, "SELECT * FROM reglogin WHERE password='$password1'");

        if(mysqli_num_rows($cek) == FALSE) {
          echo "<br><div class='col-lg-7 block alert alert-danger' role='alert'>Password Wrong</div>";
        } else {
          mysqli_query($db,"UPDATE reglogin SET firstName='$firstName', lastName='$lastName', email='$email', password='$password1' WHERE id=$id");
          echo "<meta http-equiv='refresh' content='0;url=useraccount.php?status=edit-sukses'>";
        }
      }
      ?>

    </div>
    <div>
      <?php include __DIR__.'/layout/footer.php'; ?>
    </div>
  </div>

  <!-- script -->
  <?php include __DIR__.'/js.php'; ?>

</body>
</html>
