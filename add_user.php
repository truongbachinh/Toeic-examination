<?php
include "header.php";
include "connection.php";
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
            <h5>Add New User</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="" name="forml" method="post" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">First Name :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="First name" name="firstname" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Last Name :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Last name" name="lastname" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">User Name :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="User name" name="username" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Password :</label>
                <div class="controls">
                  <input type="password" class="span11" placeholder="Enter Password" name="password" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Email :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Email" name="email" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Phone :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Phone" name="phone" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Address :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Address" name="address" />
                </div>
              </div>
              <div class="alert alert-danger" id="error" style="display:none">
                <strong>The Username Already Exist! Please Try Another.</strong>
              </div>
              <div class="form-actions text-center">

                <button type="submit" name="submitl" class="btn btn-success">Save</button>

              </div>
              <div class="alert alert-success" id="success" style="display:none">
                <strong>Record Inserted Successfully!</strong>
              </div>
            </form>
          </div>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>User Name</th>
                <th>Password</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>

              </tr>
            </thead>
            <tbody>
              <?php
              $res = mysqli_query($link, "select * from user_registration");
              while ($row = mysqli_fetch_array($res)) {
              ?>
                <tr>
                  <td><?php echo $row["id"]; ?></td>
                  <td><?php echo $row["firstname"]; ?></td>
                  <td><?php echo $row["lastname"]; ?></td>
                  <td><?php echo $row["username"]; ?></td>
                  <td><?php echo $row["password"]; ?></td>
                  <td><?php echo $row["email"]; ?></td>
                  <td><?php echo $row["phone"]; ?></td>
                  <td><?php echo $row["address"]; ?></td>
                  <td><a href="edit_user.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                  <td><a href="delete_user.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
                </tr>

              <?php

              }
              ?>
            </tbody>
          </table>
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
        '$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[phone]','$_POST[address]','$_POST[role]','$_POST[status]')");

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

<?php
include "footer.php";
?>