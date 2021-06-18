<?php
include "header.php";
include "connection.php";
$id = $_GET["id"];
$exam_for_user = "";
$res = mysqli_query($link, "select * from exam_for_user where id=$id");
while ($row = mysqli_fetch_array($res)) {
  $exam_for_user = $row["exam"];
}
?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"><a href="add_edit_question.php" class="tip-bottom"><i class="icon-home"></i>
        Add question inside <?php echo "<font color='red'>" . $exam_for_user . "</font>" ?></a></div>
  </div>
  <div class="container-fluid">

    <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add New Question</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" name="forml" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Add Question :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Question" name="question" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Add Option 1 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Option 1" name="add_opt1" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Add Option 2 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Option 2" name="add_opt2" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Add Option 3 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Option 3" name="add_opt3" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Add Option 4 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Option 4" name="add_opt4" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Add Answer :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Answer" name="add_answer" />
              </div>
            </div>
            <div class="alert alert-danger" id="error" style="display:none">
              <strong>The Question Already Exist! Please Try Another.</strong>
            </div>
            <div class="form-actions text-center">

              <button type="submit" name="submitl" class="btn btn-success">Save Question</button>

            </div>
            <div class="alert alert-success" id="success" style="display:none">
              <strong>Record Inserted Successfully!</strong>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>
<?php
if (isset($_POST["submitl"])) {
  $loop = 0;
  $count = 0;
  $res = mysqli_query($link, "select * from question where exam='$exam_for_user' ORDER BY id ASC") or die(mysqli_error($link));
  $count = mysqli_num_rows($res);

  if ($count == 0) {
?>
    <script type="text/javascript">
      document.getElementById("success").style.display = "none";
      document.getElementById("error").style.display = "block";
    </script>
  <?php
  } else {
    while ($row = mysqli_fetch_array($res)) {
      $loop = $loop + 1;
      mysqli_query($link, "update question set question_no='$loop' where id=$row[id]");
    }
  }

  $loop = $loop + 1;
  mysqli_query($link, "insert into question value(NULL,'$loop','$_POST[question]','$_POST[add_opt1]','$_POST[add_opt2]','$_POST[add_opt3]','$_POST[add_opt4]','$_POST[add_answer]','$exam_for_user')");
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
?>
<?php
include "footer.php";
?>