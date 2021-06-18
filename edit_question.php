<?php
include "header.php";
include "connection.php";
$id = $_GET["id"];
$idl = $_GET["idl"];
$text = "";
$question = "";
$opt1 = "";
$opt2 = "";
$opt3 = "";
$opt4 = "";
$answer = "";

$res = mysqli_query($link, "select * from question where id=$id");
while ($row = mysqli_fetch_array($res)) {
  $text = $row["text"];
  $question = $row["question"];
  $opt1 = $row["opt1"];
  $opt2 = $row["opt2"];
  $opt3 = $row["opt3"];
  $opt4 = $row["opt4"];
  $answer = $row["answer"];
  $tm = md5(time());
}
?>

<div id="content">
  <div id="content-header">
    < <div id="breadcrumb"><a href="chart.php" class="tip-bottom"><i class="icon-home" style="color: red;"></i>
        <p1>Dashboard</p1>
      </a>
  </div>
</div>

<div class="container-fluid">
  <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>Update Question With Text</h5>
      </div>
      <div class="widget-content nopadding">
        <form action="" name="forml" method="post" class="form-horizontal" enctype="multipart/form-data">
          <div class="control-group">
            <label class="control-label">Reading Text :</label>
            <div class="controls">
              <textarea cols="30" rows="10" class="span11" placeholder="Add Reading Text" name="text"><?php echo $text; ?></textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Add Question :</label>
            <div class="controls">
              <input type="text" class="span11" placeholder="Add Question" name="question" value="<?php echo $question; ?>">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Add Option 1 :</label>
            <div class="controls">
              <input type="text" class="span11" placeholder="Add Option 1" name="update_opt1" value="<?php echo $opt1; ?>">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Add Option 2 :</label>
            <div class="controls">
              <input type="text" class="span11" placeholder="Add Option 2" name="update_opt2" value="<?php echo $opt2; ?>">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Add Option 3 :</label>
            <div class="controls">
              <input type="text" class="span11" placeholder="Add Option 3" name="update_opt3" value="<?php echo $opt3; ?>">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Add Option 4 :</label>
            <div class="controls">
              <input type="text" class="span11" placeholder="Add Option 4" name="update_opt4" value="<?php echo $opt4; ?>">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Add Answer :</label>
            <div class="controls">
              <input type="text" class="span11" placeholder="Add Answer" name="update_answer" value="<?php echo $answer; ?>">
            </div>
          </div>
          <div class="alert alert-danger" id="error" style="display:none">
            <strong>The Question Already Exist! Please Try Another.</strong>
          </div>
          <div class="form-actions text-center">

            <button type="submit" name="submitl" class="btn btn-success">Update Question</button>

          </div>
          <div class="alert alert-success" id="success" style="display:none">
            <strong>Record Inserted Successfully!</strong>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<?php
if (isset($_POST["submitl"])) {
  mysqli_query($link, "update question set text='$_POST[text]', question='$_POST[question]',opt1='$_POST[update_opt1]',opt2='$_POST[update_opt2]',opt3='$_POST[update_opt3]',opt4='$_POST[update_opt4]',answer='$_POST[update_answer]' where id=$id");

?>
  <script type="text/javascript">
    window.location = "question.php?id=<?php echo $idl ?>";
  </script>
<?php
}
?>
<?php
include "footer.php";
?>