<?php
session_start();
include "../connection.php";
$question_no = "";
$reading_text = "";
$question = "";
$image = "";
$radio = "";
$opt1 = "";
$opt2 = "";
$opt3 = "";
$opt4 = "";
$answer = "";
$ans = "";
$count = 0;

$queno = $_GET["questionno"];
if (isset($_SESSION["answer"][$queno])) {
  $ans = $_SESSION["answer"][$queno];
}

$res = mysqli_query($link, "select * from question where exam='$_SESSION[exam_for_user]' && question_no=$_GET[questionno]");
$count = mysqli_num_rows($res);

if ($count == 0) {
  echo $question;
} else {
  while ($row = mysqli_fetch_array($res)) {


    $question_no = $row["question_no"];
    $text = $row["text"];
    $question = $row["question"];
    $image = $row["image_question"];
    $radio = $row["radio_question"];
    $opt1 = $row["opt1"];
    $opt2 = $row["opt2"];
    $opt3 = $row["opt3"];
    $opt4 = $row["opt4"];
  }
?>
  <br>
  <table>
    <tr>
      <td style="font-weight: bold; font-size: 18px; padding-left: 5px;" colspan="2">
        <?php
        echo  $text;
        echo "<br><hr>";
        echo "(" . $question_no . ")&nbsp;" . $question;
        if (!empty($image)) {
        ?>
          <br>
          &nbsp;<img src="<?php echo $image; ?>" height="100" width="100">&nbsp;

          <br>
        <?php

        }
        if (!empty($radio)) {
        ?>
          <br>
          &nbsp;
          <video width="200" height="100" controls>
            <source src="<?php echo $radio; ?>" type="video/mp4">
          </video>&nbsp;
          <br>
        <?php

        }
        ?>
      </td>
    </tr>
  </table>


  <table style="margin-left: 10px">
    <tr>
      <td>
        <input type="radio" name="rl" id="rl" value="<?php echo $opt1; ?>" onclick="radioclick(this.value,<?php echo $question_no ?>)" <?php
                                                                                                                                        if ($ans == $opt1) {
                                                                                                                                          echo "checked";
                                                                                                                                        }

                                                                                                                                        ?>>
      </td>
      <td style="padding-left: 10px">
        <?php

        echo $opt1;

        ?>
      </td>
    </tr>
    <tr>
      <td>
        <input type="radio" name="rl" id="rl" value="<?php echo $opt2; ?>" onclick="radioclick(this.value,<?php echo $question_no ?>)" <?php
                                                                                                                                        if ($ans == $opt2) {
                                                                                                                                          echo "checked";
                                                                                                                                        }

                                                                                                                                        ?>>
      </td>
      <td style="padding-left: 10px">
        <?php

        echo $opt2;

        ?>

      </td>
    </tr>
    <tr>
      <td>
        <input type="radio" name="rl" id="rl" value="<?php echo $opt3; ?>" onclick="radioclick(this.value,<?php echo $question_no ?>)" <?php
                                                                                                                                        if ($ans == $opt3) {
                                                                                                                                          echo "checked";
                                                                                                                                        }

                                                                                                                                        ?>>
      </td>
      <td style="padding-left: 10px">
        <?php

        echo $opt3;

        ?>

      </td>
    </tr>
    <tr>
      <td>
        <input type="radio" name="rl" id="rl" value="<?php echo $opt4; ?>" onclick="radioclick(this.value,<?php echo $question_no ?>)" <?php
                                                                                                                                        if ($ans == $opt4) {
                                                                                                                                          echo "checked";
                                                                                                                                        }

                                                                                                                                        ?>>
      </td>
      <td style="padding-left: 10px">
        <?php

        echo $opt4;

        ?>

      </td>
    </tr>
  </table>
<?php
}
