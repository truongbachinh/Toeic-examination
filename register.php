<?php
include "connection.php";
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Login For User</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="css/matrix-login.css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="header">
        <a href="login_user.php" style="color:white"><i class="icon icon-share-alt"></i><span>Login For User</span></a>
    </div>
    <div id="loginbox">
        <div class="error-page-int">
            <div class="control-group normal_text">
                <h3>Register Page</h3>
            </div>
            <div class="content-error">
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="" name="forml" method="post">
                            <div class="form-group">
                                <label>First Name :</label>
                                <input type="text" style=" width: 100%;" name="firstname" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group ">
                                <label>Last Name :</label>
                                <input type="text" style="width: 100%;" name="lastname" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label>Username :</label>
                                <input type="text" style=" width: 100%;" name="username" class="form-control" placeholder="User name">
                            </div>
                            <div class="form-group">
                                <label>Password :</label>
                                <input type="text" style=" width: 100%;" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Email :</label>
                                <input type="text" style=" width: 100%;" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Phone :</label>
                                <input type="text" style="width: 100%;" name="phone" class="form-control" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <label>Address :</label>
                                <input type="text" style="width: 100%;" name="address" class="form-control" placeholder="Adress">
                            </div>
                    </div>
                    <div class="alert alert-success" id="success" style="display:none">
                        <strong>Record Inserted Successfully!</strong>
                    </div>
                    <div class="alert alert-danger" id="error" style="display:none">
                        <strong>The Username Already Exist! Please Try Another.</strong>
                    </div>
                    <div class="form-actions text-center">

                        <button type="submit" name="submitl" class="btn btn-success">Save</button>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
    if (isset($_POST["submitl"])) {
        $count = 0;
        $res = mysqli_query($link, "select * from user_registration where username='$_POST[username]'");
        $count = mysqli_num_rows($res);

        if ($count > 0) {
    ?>
            <script type="text/javascript">
                document.getElementById("success").style.display = "none";
                document.getElementById("error").style.display = "block";
            </script>
        <?php
        } else {
            mysqli_query($link, "insert into user_registration values(NUll,'$_POST[firstname]',
        '$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[phone]','$_POST[address]')");

        ?>
            <script type="text/javascript">
                document.getElementById("error").style.display = "none";
                document.getElementById("success").style.display = "block";
                setTimeout(function() {
                    window.location.href = window.location.href;
                }, 1000);
            </script>
    <?php
        }
    }
    ?>
</body>

</html>