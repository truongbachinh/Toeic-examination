<?php
session_start();
include "../connection.php";
$total_que=0;
$resl=mysqli_query($link,"select * from question where exam='$_SESSION[exam_for_user]'");
$total_que=mysqli_num_rows($resl);
echo $total_que;
?>