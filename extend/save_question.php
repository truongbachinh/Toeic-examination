<?php
session_Start();
$questionno=$_GET["questionno"];
$value1=$_GET["value1"];
$_SESSION["answer"][$questionno]=$value1;
?>