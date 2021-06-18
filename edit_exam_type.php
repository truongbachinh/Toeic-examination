<?php
include "header.php";
include "connection.php";
$id = $_GET["id"];

$exam_type = "";
$res = mysqli_query($link, "select * from materials where id=$id");
while ($row = mysqli_fetch_array($res)) {
  $exam_type = $row["exam_type"];
  $exam = $row["exam"];
}
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"><a href="chart.php" class="tip-bottom"><i class="icon-home" style="color: red;"></i>
        <p1>Dashboard</p1>
      </a>
    </div>

    <div class="container-fluid">

      <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
              <h5>Edit Exam Type</h5>
            </div>
            <div class="widget-content nopadding">
              <form action="" name="forml" method="post" class="form-horizontal">
                <div class="control-group">
                  <label class="control-label">Exam Name :</label>
                  <div class="controls">
                    <input type="text" class="span11" placeholder="Exam Name" name="examtype" value="<?php echo $exam_type; ?>" />
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
      mysqli_query($link, "update exam_type set exam_type='$_POST[examtype]' where id=$id");


    ?>
      <script type="text/javascript">
        document.getElementById("success").style.display = "block";
        setTimeout(function() {
          window.location = "add_exam_type.php?id=<?php echo $id ?>";
        }, 1000);
      </script>
    <?php
    }
    ?>

    <?php
    include "footer.php";
    ?>