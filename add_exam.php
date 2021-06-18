e<?php
  session_start();
  include "header.php";
  include "connection.php";
  if (isset($_GET["id"])) {
    $_SESSION["exam_id"] = $_GET["id"];
  }
  $id = $_SESSION["exam_id"];
  $exam_type = "";
  $res = mysqli_query($link, "select * from exam_type where id=$id");
  while ($row = mysqli_fetch_array($res)) {
    $exam_type = $row["exam_type"];
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
            <h5>Add New Exam</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="" name="forml" method="post" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">Exam Name :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Exam name" name="examname" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Time Do Exam :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Time Do Exam" name="time_do_exam" />
                </div>
              </div>
              <div class="alert alert-danger" id="error" style="display:none">
                <strong>The Unit Already Exist! Please Try Another.</strong>
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
          <div class="widget-title"> <span class="icon"> <i class="icon-tag"></i> </span>
            <h5>Exam Categories</h5>
          </div>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Examination Name</th>
                <th>Time Do Examination</th>
                <th>Select</th>
                <th>Edit</th>
                <th>Delete</th>

              </tr>
            </thead>
            <tbody>
              <?php
              $res = mysqli_query($link, "select * from exam_for_user where exam_type='$exam_type' ORDER BY id ASC");
              while ($row = mysqli_fetch_array($res)) {
              ?>
                <tr>
                  <td><?php echo $row["id"]; ?></td>
                  <td><?php echo $row["exam"]; ?></td>
                  <td><?php echo $row["time_do_exam"]; ?></td>
                  <td><a href="question.php?id=<?php echo $row["id"]; ?>">Select</a></td>
                  <td><a href="edit_exam.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                  <td><a href="delete_exam.php?id=<?php echo $row["id"]; ?>">Delete</a>
                  </td>
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
  $res = mysqli_query($link, "select * from exam_for_user where exam_type='$exam_type' ORDER BY id ASC") or die(mysqli_error($link));
  $count = mysqli_num_rows($res);

  if ($count == 0) {
?>
    <script type="text/javascript">
      document.getElementById("success").style.display = "none";
      document.getElementById("error").style.display = "block";
    </script>
  <?php
  } else {
    mysqli_query($link, "insert into exam_for_user values(NUll,'$exam_type','$_POST[examname]','$_POST[time_do_exam]')");

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