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
                        <h3 class="panel-title"><b>Please Sign In</b></h3>
                    </div>
                    <div class="panel-body">

                        <form action="" method="POST" role="">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus required="required">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" name="btnlogin" class="btn btn-lg btn-success btn-block" style="margin: 8px 0;">Login</button>
                            </fieldset>
                        </form>

                        <?php
                        include "config.php";
                        if (isset($_POST['btnlogin'])) {
                            $email = mysqli_real_escape_string($db, $_POST['email']);
                            $password = mysqli_real_escape_string($db, $_POST['password']);

                            $ceklogin = mysqli_query($db, "SELECT * FROM reglogin WHERE email='$email' AND password='$password'");

                            $nama_user = mysqli_fetch_array($ceklogin)['firstName'];

                    //Cek Database
                            if (mysqli_num_rows($ceklogin) == 1) {
                                session_start();
                                $_SESSION['user'] = $nama_user;
                                header("location:index.php");
                            } else {
                                echo "<br><div class='alert alert-danger' role='alert'>Login Failed</div>";
                            }
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Script JS -->
    <?php include __DIR__.'/js.php'; ?>

</body>

</html>
