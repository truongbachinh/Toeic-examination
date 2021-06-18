<?php
include "connection.php";
$id = $_GET["id"];
$idl = $_GET["idl"];
mysqli_query($link, "delete from question where id=$id") or die(mysqli_error($link));
?>
<script type="text/javascript">
    window.location = "question.php?id=<?php echo $idl ?>";
</script>