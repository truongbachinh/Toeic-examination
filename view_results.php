<?php
session_start();
include "header_user.php";
include "connection.php";
?>
<div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

    <div class="col-lg-8 col-lg-push-2" style="min-height: 500px; background-color: white;">
        <h1 style="text-align: center;">View All exam had been done</h1>
        <?php
        $count = 0;
        $res = mysqli_query($link, "select * from exam_result where username='$_SESSION[username]' ORDER BY id DESC");
        $count = mysqli_num_rows($res);

        if ($count == 0) {
        ?>
            <h1 style="text-align: center;">No results have been done</h1>
        <?php
        } else {
            $link_delete = "delete_result_by_user.php";
            echo "<table class='table table-bordered'>";
            echo "<tr style='background-color: #5BB75B; color:white;'>";
            echo "<th>";
            echo "username";
            echo "</th>";
            echo "<th>";
            echo "exam";
            echo "</th>";
            echo "<th>";
            echo "total question";
            echo "</th>";
            echo "<th>";
            echo "correct answer";
            echo "</th>";
            echo "<th>";
            echo "wrong answer";
            echo "</th>";
            echo "<th>";
            echo "exam time";
            echo "</th>";
            echo "<tr>";

            while ($row = mysqli_fetch_array($res)) {

                echo "<tr>";
                echo "<td>";
                echo $row["username"];
                echo "</td>";
                echo "<td>";
                echo $row["exam"];
                echo "</td>";
                echo "<td>";
                echo $row["total_question"];
                echo "</td>";
                echo "<td>";
                echo $row["correct_answer"];
                echo "</td>";
                echo "<td>";
                echo $row["wrong_answer"];
                echo "</td>";
                echo "<td>";
                echo $row["exam_time"];
                echo "</td>";
                echo "<tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
</div>

<?php
include "footer.php";
?>