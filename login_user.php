<?php
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login For User</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="css/matrix-login.css" />
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<div class="header">
    <a href="index_admin.php" style="color:white"><i class="icon icon-share-alt"></i><span>Login For Admin</span></a>
</div>

<body>
    <div id="loginbox">
        <form name="forml" class="form-vertical" action="" method="post">
            <div class="control-group normal_text">
                <h3>Login Page</h3>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" placeholder="Username" name="username" require />
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" name="password" require />
                    </div>
                </div>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Remember Me
                </label>
            </div>
            <div class="form-actions">
                <span class="pull-left"><input type="submit" name="login" value="Login" class="btn btn-success"></span>
                <span class="pull-right"><a href="register.php" class="flip-link btn btn-info" id="to-recover">Register?</a></span>
            </div>
        </form>

        <?php
        if (isset($_POST["login"])) {
            $username = mysqli_real_escape_string($link, $_POST["username"]);
            $password = mysqli_real_escape_string($link, $_POST["password"]);

            $count = 0;
            $res = mysqli_query($link, "select * from user_registration where username='$username' && password='$password'");
            $count = mysqli_num_rows($res);
            if ($count == 0) {
        ?>
                <script type="text/javascript">
                    document.getElementById("failure").style.display = "block";
                </script>
            <?php
            } else {
                $_SESSION["username"] = $_POST["username"];
                $row = mysqli_fetch_array($res);
                $_SESSION["id"] = $row["id"];
            ?>
                <script type="text/javascript">
                    window.location = "chart_reading.php";
                </script>
        <?php
            }
        }
        ?>

    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/matrix.login.js"></script>

</body>

</html>