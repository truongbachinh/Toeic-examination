<?php
session_start();
$exam_type = $_GET["exam_type"];
$_SESSION["exam_type"] = $exam_type;
if (!isset($_SESSION["username"])) {

?>
    <script type="text/javascript">
        window.location = "login_user.php";
    </script>
<?php

}
?>
<?php
include "connection.php";
include "header_user.php";
?>


<div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

    <div class="col-lg-8 col-lg-push-2" style="min-height: 500px; background-color: white;">

        <?php
        $res = mysqli_query($link, "select * from exam_for_user where exam_type='$exam_type'");
        while ($row = mysqli_fetch_array($res)) {
        ?>
            <input type="button" class="btn btn-success form-control" value="<?php echo $row["exam"]; ?>" style="margin-top: 10px; background-color: #5BB75B; color: white" onclick="set_exam_type_session(this.value);">
        <?php

        }
        ?>


    </div>

</div>

<script type="text/javascript">
    function set_exam_type_session(exam_for_user) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                window.location = "dashboard.php";
            }
        };
        xmlhttp.open("GET", "extend/set_exam_type_session.php?exam_for_user=" + exam_for_user, true);
        xmlhttp.send(null);
    }
</script>


<?php
include "footer.php";
?>