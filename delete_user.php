<?php
include "connection.php";
$id = $_GET["id"];
mysqli_query($link, "delete from user_registration where id=$id");
?>
<script type="text/javascript">
    window.location = "add_user.php";
</script>