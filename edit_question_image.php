<?php
include "header.php";
include "connection.php";
$id = $_GET["id"];
$idl = $_GET["idl"];

$question = "";
$image_question = "";
$radio_question = "";
$opt1 = "";
$opt2 = "";
$opt3 = "";
$opt4 = "";
$answer = "";

$res = mysqli_query($link, "select * from question where id=$id");
while ($row = mysqli_fetch_array($res)) {
  $question = $row["question"];
  $image_question = $row["image_question"];
  $radio_question = $row["radio_question"];
  $opt1 = $row["opt1"];
  $opt2 = $row["opt2"];
  $opt3 = $row["opt3"];
  $opt4 = $row["opt4"];
  $answer = $row["answer"];
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
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Update Question With Image</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" name="forml" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">Update Question :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Question" name="update_question" value="<?php echo $question; ?>">

                <table style="border: 5px;">
                  <tr>
                    <td>Image File Upload : </td>
                    <td><input type="file" class="span11" name="update_igquestion" value="<?php echo $image_question; ?>"></td>
                  </tr>
                  <tr>
                    <td>Audio File Upload : </td>
                    <td><input type="file" class="span11" name="update_rdquestion" value="<?php echo $radio_question; ?>"></td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Update Option 1 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Option 1" name="update_fopt1" value="<?php echo $opt1; ?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Update Option 2 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Option 2" name="update_fopt2" value="<?php echo $opt2; ?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Update Option 3 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Option 3" name="update_fopt3" value="<?php echo $opt3; ?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Update Option 4 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Option 4" name="update_fopt4" value="<?php echo $opt4; ?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Update Answer :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Answer" name="update_fanswer" value="<?php echo $answer; ?>">
              </div>
            </div>
            <div class="alert alert-danger" id="error" style="display:none">
              <strong>The Question Already Exist! Please Try Another.</strong>
            </div>
            <div class="form-actions text-center">

              <button type="submit" name="submitl_img" class="btn btn-success">Update Question</button>

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
if (isset($_POST["submitl_img"])) {

  $image_ques = $_FILES["update_igquestion"]["name"];
  $radio_ques = $_FILES["update_rdquestion"]["name"];

  $dst_dbl = $image_question;
  $dst_db2 = $radio_question;

  if ($image_ques != "") {
    $dstl = "./image_question/" . $image_ques;
    $dst_dbl = "image_question/" . $image_ques;
    move_uploaded_file($_FILES["update_igquestion"]["tmp_name"], $dstl);
  }
  if ($radio_ques != "") {
    $dst2 = "./image_question/" . $radio_ques;
    $dst_db2 = "image_question/" . $radio_ques;
    move_uploaded_file($_FILES["update_rdquestion"]["tmp_name"], $dst2);
  }
  mysqli_query($link, "update question set question='$_POST[update_question]',image_question='$dst_dbl',radio_question='$dst_db2',opt1='$_POST[update_fopt1]',opt2='$_POST[update_fopt2]',opt3='$_POST[update_fopt3]',opt4='$_POST[update_fopt4]',answer='$_POST[update_fanswer]' where id=$id");


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