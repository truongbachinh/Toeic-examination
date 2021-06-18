<?php
session_start();
$date = date("Y-m-d H:i:s");
$_SESSION["end_time"] = date("Y-m-d H:i:s", strtotime($date . "+ $_SESSION[exam_time] minutes"));
include "header_user.php";
include "connection.php";
?>
<div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">
    <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white;">
        <?php
        $correct = 0;
        $wrong = 0;
        if (isset($_SESSION["answer"])) {
            for ($i = 1; $i <= sizeof($_SESSION["answer"]); $i++) {
                $answer = "";
                $res = mysqli_query($link, "select * from question where exam='$_SESSION[exam_for_user]' && question_no=$i");
                while ($row = mysqli_fetch_array($res)) {
                    $answer = $row["answer"];
                }
                if (isset($_SESSION["answer"][$i])) {
                    if ($answer == $_SESSION["answer"][$i]) {
                        $correct = $correct + 1;
                    } else {
                        $wrong = $wrong + 1;
                    }
                } else {
                    $wrong = $wrong + 1;
                }
            }
        }
        $count = 0;
        $res = mysqli_query($link, "select * from question where exam='$_SESSION[exam_for_user]'");
        $count = mysqli_num_rows($res);
        $wrong = $count - $correct;

        echo "<table class='table table-bordered'>";
        echo "<tr style='background-color: #5BB75B; color:white;'>";
        echo "<th>";
        echo "Total question";
        echo "</th>";
        echo "<th>";
        echo "Correct Answer";
        echo "</th>";
        echo "<th>";
        echo "Wrong Answer";
        echo "</th>";
        echo "<tr>";
        echo "<tr>";
        echo "<th>";
        echo $count;
        echo "<th>";
        echo $correct;
        echo "<th>";
        echo $wrong;
        echo "</tr>";
        echo "</table>"

        ?>
    </div>
</div>

<?php
if (isset($_SESSION["exam_start"])) {
    $date = date("Y-m-d");
    mysqli_query($link, "insert into exam_result(id, username, exam_type, exam, total_question, correct_answer, wrong_answer, exam_time)values(NULL,'$_SESSION[username]', '$_SESSION[exam_type]','$_SESSION[exam_for_user]','$count','$correct','$wrong','$date')") or die(mysqli_error($link));
}
if (isset($_SESSION["exam_start"])) {
    unset($_SESSION["exam_start"]);
?>
    <script type="text/javascript">
        window.location.href = window.location.href;
    </script>
<?php

}


?>


<?php
include "footer.php"
?>