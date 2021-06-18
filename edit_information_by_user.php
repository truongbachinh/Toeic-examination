<?php
session_start();
include "header_user.php";
include "connection.php";
$id = $_SESSION["id"];
$firstname = "";
$lastname = "";
$username = "";
$password = "";
$email = "";
$phone = "";
$address = "";
$res = mysqli_query($link, "select * from user_registration where id=$id");
while ($row = mysqli_fetch_array($res)) {
    $firstname = $row["firstname"];
    $lastname = $row["lastname"];
    $username = $row["username"];
    $password = $row["password"];
    $email = $row["email"];
    $phone = $row["phone"];
    $address = $row["address"];
}
?>
<div class="container-fluid" style="text-align:center; ">

    <div id="loginbox">
        <div class="error-page-int" style="background-color:#5BB75B;">
            <div class="control-group normal_text">
                <h3>Edit User Information</h3>
            </div>
            <div class="content-error">
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="" name="forml" method="post" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">First Name :</label>
                                <div class="controls">
                                    <input type="text" style=" width: 100%;" class="span11" placeholder="First name" name="firstname" value="<?php echo $firstname; ?>" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Last Name :</label>
                                <div class="controls">
                                    <input type="text" style=" width: 100%;" class="span11" placeholder="Last name" name="lastname" value="<?php echo $lastname; ?>" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Password :</label>
                                <div class="controls">
                                    <input type="password" style=" width: 100%;" class="span11" placeholder="Enter Password" name="password" value="<?php echo $password; ?>" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Email :</label>
                                <div class="controls">
                                    <input type="text" style=" width: 100%;" class="span11" placeholder="Email" name="email" value="<?php echo $email; ?>" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Phone :</label>
                                <div class="controls">
                                    <input type="text" style=" width: 100%;" class="span11" placeholder="Phone" name="phone" value="<?php echo $phone; ?>" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Address :</label>
                                <div class="controls">
                                    <input type="text" style=" width: 100%;" class="span11" placeholder="Address" name="address" value="<?php echo $address; ?>" />
                                </div>
                            </div>
                            <div class="alert alert-danger" id="error" style="display:none">
                                <strong>The Username Already Exist! Please Try Another.</strong>
                            </div>
                            <br>
                            <div class="form-actions text-center">

                                <button type="submit" name="submitl" class="btn btn-success">Update</button>

                            </div>
                            <div class="alert alert-success" id="success" style="display:none">
                                <strong>Record Updateed Successfully!</strong>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST["submitl"])) {
        mysqli_query($link, "update user_registration set firstname='$_POST[firstname]',lastname='$_POST[lastname]',password='$_POST[password]',email='$_POST[email]',phone='$_POST[phone]',address='$_POST[address]'where id=$id");
    ?>
        <script type="text/javascript">
            document.getElementById("success").style.display = "block";
            setTimeout(function() {
                window.location.href = "view_user_information.php";
            }, 1000);
        </script>
    <?php
    }
    ?>

    <?php
    include "footer.php";
    ?>