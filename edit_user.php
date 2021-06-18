<?php
include "header.php";
include "connection.php";
$id = $_GET["id"];
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

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"><a href="chart.php" class="tip-bottom"><i class="icon-home" style="color: red;"></i>
        <p1>Dashboard</p1>
      </a>
    </div>
  </div>

  <div class="container-fluid">

    <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Edit User</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="" name="forml" method="post" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">First Name :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="First name" name="firstname" value="<?php echo $firstname; ?>" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Last Name :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Last name" name="lastname" value="<?php echo $lastname; ?>" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">User Name :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="User name" name="username" value="<?php echo $username; ?>" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Password :</label>
                <div class="controls">
                  <input type="password" class="span11" placeholder="Enter Password" name="password" value="<?php echo $password; ?>" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Email :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Email" name="email" value="<?php echo $email; ?>" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Phone :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Phone" name="phone" value="<?php echo $phone; ?>" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Address :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Address" name="address" value="<?php echo $address; ?>" />
                </div>
              </div>
              <div class="alert alert-danger" id="error" style="display:none">
                <strong>The Username Already Exist! Please Try Another.</strong>
              </div>
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
    mysqli_query($link, "update user_registration set firstname='$_POST[firstname]',lastname='$_POST[lastname]',username='$_POST[username]',password='$_POST[password]',email='$_POST[email]',phone='$_POST[phone]',address='$_POST[address]'where id=$id");
  ?>
    <script type="text/javascript">
      document.getElementById("success").style.display = "block";
      setTimeout(function() {
        window.location.href = "add_user.php";
      }, 1000);
    </script>
  <?php
  }
  ?>

  <?php
  include "footer.php";
  ?>