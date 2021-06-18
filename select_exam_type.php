<?php
session_start();
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
        $res = mysqli_query($link, "select * from exam_type");
        while ($row = mysqli_fetch_array($res)) {
        ?>

            <input type="button" class="btn btn-success form-control" value="<?php echo $row["exam_type"]; ?>" style="margin-top: 10px; background-color: #5BB75B; color: white" onclick="location.href='select_exam.php?exam_type=<?php echo  $row['exam_type'] ?>' "></input>
        <?php
        }
        ?>
    </div>
</div>

<?php
include "footer.php";
?>