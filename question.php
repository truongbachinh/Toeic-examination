<?php
include "header.php";
include "connection.php";
$id = $_GET["id"];
$idl = $_GET["idl"];
$exam_for_user = "";
$res = mysqli_query($link, "select * from exam_for_user where id=$id");
while ($row = mysqli_fetch_array($res)) {
  $exam_for_user = $row["exam"];
}
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"><a href="add_edit_question.php" class="tip-bottom"><i class="icon-home"></i>
        Add question inside <?php echo "<font color='red'>" . $exam_for_user . "</font>" ?></a>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add New Question With Text</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" name="forml" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Text :</label>
              <div class="controls">
                <textarea cols="30" rows="10" class="span11" placeholder="Add Reading Text" name="text"></textarea>
              </div>
            </div>
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

      <br>
      <br>

      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add New Question With Image or Radio</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" name="forml" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">Add Question :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Question" name="question" />
                <table style="border: 5px;">
                  <tr>
                    <td>Image File Upload : </td>
                    <td><input type="file" class="span11" name="image_question" /></td>
                  </tr>
                  <tr>
                    <td>Audio File Upload : </td>
                    <td><input type="file" class="span11" name="radio_question" /></td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Add Option 1 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Option 1" name="add_fopt1" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Add Option 2 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Option 2" name="add_fopt2" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Add Option 3 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Option 3" name="add_fopt3" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Add Option 4 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Option 4" name="add_fopt4" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Add Answer :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Add Answer" name="add_fanswer" />
              </div>
            </div>
            <div class="alert alert-danger" id="error_f" style="display:none">
              <strong>The Question Already Exist! Please Try Another.</strong>
            </div>
            <div class="form-actions text-center">

              <button type="submit" name="submitl_f" class="btn btn-success">Save Image Question</button>

            </div>
            <div class="alert alert-success" id="success_f" style="display:none">
              <strong>Record Inserted Successfully!</strong>
            </div>
          </form>
        </div>
      </div>
    </div>

    <br>
    <br>
    <div class="widget-box">
      <div class="widget-title"> <span class="icon" style="width: 15px;"> <i class="icon-align-justify"></i> </span>
        <div id="content-header">
          <div id="breadcrumb"><a href="add_edit_question.php" class="tip-bottom"><i class="icon-home"></i>
              Question Inside <?php echo "<font color='red'>" . $exam_for_user . "</font>" ?></a></div>
        </div>
      </div>
      <div class="widget-content nopadding">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Text</th>
              <th>Question</th>
              <th>Image Question</th>
              <th>Radio Question</th>
              <th>Opt1</th>
              <th>Opt2</th>
              <th>Opt3</th>
              <th>Opt4</th>
              <th>Answer</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $res = mysqli_query($link, "select * from question where exam='$exam_for_user'");
            while ($row = mysqli_fetch_array($res)) {
              echo "<tr>";
              echo "<td>";
              echo $row["question_no"];
              echo "</td>";
              echo "<td >";
              echo $row["text"];
              echo "</td>";
              echo "<td >";
              echo $row["question"];
              echo "</td>";
              echo "<td>";

              if (!empty($row["image_question"])) {
            ?>
                <img src="<?php echo $row["image_question"]; ?>" height="50" width="50">
              <?php
              } else {
                echo "No data";
              }

              echo "</td>";
              echo "<td>";

              if (!empty($row["radio_question"])) {
              ?>
                <!-- <iframe width="150" height="100" src="<?php echo $row["radio_question"]; ?>?autoplay=false" frameborder="0"></iframe> -->
                <video width="150" height="100" controls>
                  <source src="<?php echo $row["radio_question"]; ?>" type="video/mp4">
                </video>
              <?php
              } else {
                echo "No data";
              }

              echo "</td>";

              echo "<td>";


              echo $row["opt1"];


              echo "</td>";
              echo "<td>";



              echo $row["opt2"];


              echo "</td>";
              echo "<td>";



              echo $row["opt3"];


              echo "</td>";
              echo "<td>";


              echo $row["opt4"];

              echo "</td>";
              echo "<td>";



              echo $row["answer"];

              echo "</td>";

              echo "<td>";
              if (!empty($row["image_question"]) || !empty($row["radio_question"])) {
              ?>
                <a href="edit_question_image.php?id=<?php echo $row["id"]; ?>&idl=<?php echo $id; ?>">Edit</a>
              <?php
              } else {
              ?>
                <a href="edit_question.php?id=<?php echo $row["id"]; ?> &idl=<?php echo $id; ?>">Edit</a>
              <?php
              }
              echo "</td>";

              echo "<td>";
              ?>
              <a href="delete_question.php?id=<?php echo $row["id"]; ?>&idl=<?php echo $id; ?>">Delete</a>
            <?php
              echo "</td>";
              echo "</tr>";
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
  $loop = 0;
  $count = 0;
  $res1 = mysqli_query($link, "select * from question where exam='$exam_for_user' ORDER BY id ASC") or die(mysqli_error($link));
  $res = mysqli_query($link, "select * from question where exam='$exam_for_user' and question='$_POST[question]'") or die(mysqli_error($link));
  $count = mysqli_num_rows($res);

  if ($count > 0) {
?>
    <script type="text/javascript">
      document.getElementById("success").style.display = "none";
      document.getElementById("error").style.display = "block";
    </script>
  <?php
  } else {
    while ($row = mysqli_fetch_array($res1)) {
      $loop = $loop + 1;
      mysqli_query($link, "update question set question_no='$loop' where id=$row[id]");
    }
    $loop = $loop + 1;
    mysqli_query($link, "insert into question values(NULL,'$loop','$_POST[text]','$_POST[question]','','','$_POST[add_opt1]','$_POST[add_opt2]','$_POST[add_opt3]','$_POST[add_opt4]','$_POST[add_answer]','$exam_for_user')");

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
if (isset($_POST["submitl_f"])) {
  $loop = 0;
  $count = 0;
  $res1 = mysqli_query($link, "select * from question where exam='$exam_for_user' ORDER BY id ASC") or die(mysqli_error($link));
  $res = mysqli_query($link, "select * from question where exam='$exam_for_user' and question='$_POST[question]'") or die(mysqli_error($link));
  $count = mysqli_num_rows($res);

  if ($count > 0) {
?>
    <script type="text/javascript">
      document.getElementById("success_f").style.display = "none";
      document.getElementById("error_f").style.display = "block";
    </script>
  <?php
  } else {
    while ($row = mysqli_fetch_array($res1)) {
      $loop = $loop + 1;
      mysqli_query($link, "update question set question_no='$loop' where id=$row[id]");
    }
  ?>
    <script type="text/javascript">
      document.getElementById("error_f").style.display = "none";
      document.getElementById("success_f").style.display = "block";
      setTimeout(function() {
        window.location.href = window.location.href;
      }, 1000);
    </script>
<?php
  }

  $loop = $loop + 1;

  $tm = md5(time());


  $fnml = $_FILES["image_question"]["name"];
  $dst_dbl = "";
  if (!empty($fnml)) {
    $dst_dbl = "image_question/"  . $tm . $fnml;
  }
  $dstl = "./image_question/"  . $tm . $fnml;
  move_uploaded_file($_FILES["image_question"]["tmp_name"], $dstl);

  $fnm2 = $_FILES["radio_question"]["name"];
  $dst_db2 = "";
  if (!empty($fnm2)) {
    $dst_db2 = "radio_question/"  . $tm . $fnm2;
  }
  $dst2 = "./radio_question/"  . $tm . $fnm2;
  move_uploaded_file($_FILES["radio_question"]["tmp_name"], $dst2);


  mysqli_query($link, "insert into question values(NULL,'$loop','','$_POST[question]','$dst_dbl','$dst_db2','$_POST[add_fopt1]','$_POST[add_fopt2]','$_POST[add_fopt3]','$_POST[add_fopt4]','$_POST[add_fanswer]','$exam_for_user')");
}
?>

<?php
include "footer.php";
?>