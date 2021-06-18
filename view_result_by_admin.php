<?php
session_start();
include "header.php";
include "connection.php";
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
            <div class="widget-title"> <span class="icon"> <i class="icon-tag"></i> </span>
                <h5>Examination Results</h5>
            </div>
            <?php
            $count = 0;
            $res = mysqli_query($link, "select * from exam_result ORDER BY id DESC");
            $count = mysqli_num_rows($res);

            if ($count == 0) {
            ?>
                <h1 style="text-align: center;">No results have been done</h1>
            <?php
            } else {
                echo "<table class='table table-bordered table-striped'>";
                echo "<tr >";
                echo "<th>";
                echo "Username";
                echo "</th>";
                echo "<th>";
                echo "Examination";
                echo "</th>";
                echo "<th>";
                echo "Total question";
                echo "</th>";
                echo "<th>";
                echo "Correct answer";
                echo "</th>";
                echo "<th>";
                echo "Wrong answer";
                echo "</th>";
                echo "<th>";
                echo "Exam time";
                echo "</th>";
                echo "<tr>";

                while ($row = mysqli_fetch_array($res)) {
                    $link_delete = "delete_result_by_admin.php";
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
</div>

<?php
include "footer.php";
?>