<?php
session_start();
include "header_user.php";
include "connection.php";
?>
<div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 text-right">
        <h1 style="text-align: center;">Information</h1>
        <?php

        $res = mysqli_query($link, "select * from user_registration where username='$_SESSION[username]' ORDER BY id DESC");
        $count = mysqli_num_rows($res);

        echo "<table class='table table-bordered'>";
        echo "<tr style='background-color: #5BB75B; color:white;text-align: center;'>";
        echo "<th>";
        echo "First_Name";
        echo "</th>";
        echo "<th>";
        echo "Last_Name";
        echo "</th>";
        echo "<th>";
        echo "Username";
        echo "</th>";
        echo "<th>";
        echo "Password";
        echo "</th>";
        echo "<th>";
        echo "Email";
        echo "</th>";
        echo "<th>";
        echo "Phone";
        echo "</th>";
        echo "<th>";
        echo "Address";
        echo "</th>";
        echo "<th>";
        echo "Edit";
        echo "</th>";
        echo "<tr>";

        while ($row = mysqli_fetch_array($res)) {
            $link_address = "edit_Information_by_user.php";

            echo "<tr style='text-align: left;'>";
            echo "<td>";
            echo $row["firstname"];
            echo "</td>";
            echo "<td>";
            echo $row["lastname"];
            echo "</td>";
            echo "<td>";
            echo $row["username"];
            echo "</td>";
            echo "<td>";
            echo $row["password"];
            echo "</td>";
            echo "<td>";
            echo $row["email"];
            echo "</td>";
            echo "<td>";
            echo $row["phone"];
            echo "</td>";
            echo "<td>";
            echo $row["address"];
            echo "</td>";
            echo "<td>";
            echo "<a href='" . $link_address . "'>Edit</a>";
            echo "</td>";
            echo "<tr>";
        }
        echo "</table>";

        ?>
    </div>

</div>
<?php
include "footer.php";
?>