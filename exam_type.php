<?php
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
            <div class="span12">
                <div class="widget-content nopadding">
                    <div class="widget-title"> <span class="icon"> <i class="icon-tag"></i> </span>
                        <h5>Exam Type</h5>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Examination Type</th>
                                <th>Select</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $res = mysqli_query($link, "select * from exam_type");
                            while ($row = mysqli_fetch_array($res)) {
                            ?>
                                <tr>
                                    <td><?php echo $row["exam_type"]; ?></td>
                                    <td><a href="add_exam.php?id=<?php echo $row["id"]; ?>">Select</a></td>
                                </tr>

                            <?php

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
    $count = 0;
    $res = mysqli_query($link, "select * from exam_type where exam_type='$_POST[examtype]'");
    $count = mysqli_num_rows($res);

    if ($count > 0) {
?>
        <script type="text/javascript">
            document.getElementById("success").style.display = "none";
            document.getElementById("error").style.display = "block";
        </script>
    <?php
    } else {
        mysqli_query($link, "insert into exam_type values(NUll,'$_POST[examtype]')");

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
include "footer.php";
?>