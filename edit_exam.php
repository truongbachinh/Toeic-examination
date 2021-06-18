<?php
include "header.php";
include "connection.php";
$id = $_GET["id"];
$unit = "";
$res = mysqli_query($link, "select * from exam_for_user where id=$id");
while ($row = mysqli_fetch_array($res)) {
  $exam = $row["exam"];
  $time_do_exam = $row["time_do_exam"];
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
            <h5>Edit Exam</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="" name="forml" method="post" class="form-horizontal">
              <div class="control-group">
                <label class="control-label">Exam Name :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Exam name" name="examname" value="<?php echo $exam; ?>" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Exam Time :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Time Do Exam" name="time_do_exam" value="<?php echo $time_do_exam; ?>" />
                </div>
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
    mysqli_query($link, "update exam_for_user set exam='$_POST[examname]' where id='$id'");
    mysqli_query($link, "update exam_for_user set time_do_exam='$_POST[time_do_exam]' where id='$id'");
    mysqli_query($link, "update question set exam='$_POST[examname]' where exam='$exam'");
  ?>
    <script type="text/javascript">
      document.getElementById("success").style.display = "block";
      setTimeout(function() { 
        window.location.href = "login_user.php";
      }, 1000);
    </script>
  <?php
  }
  ?>

  <?php
  include "footer.php";
  ?>