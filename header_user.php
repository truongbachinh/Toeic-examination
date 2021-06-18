<?php
// include "connection.php";
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Online Exam</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">


</head>

<body>

    <div class="all-content-wrapper">

        <div class="header-advance-area">
            <div class='header' style="background-color: #5BB75B">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-8 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"> <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        Chart <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="chart_reading.php"><span class="edu-icon edu-locked author-log-ic"></span>Reading</a>
                                                        <li><a href="chart_listen.php"><span class="edu-icon edu-locked author-log-ic"></span>Listening</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item"><a href="select_exam_type.php">Select Exam</a>
                                                </li>
                                                </li>
                                                <li class="nav-item"><a href="view_results.php" class="nav-link">View All Result Had Been Done</a>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <img src="img/student.png" alt="" />
                                                        <span class="admin-name"><?php echo $_SESSION["username"]; ?></span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="view_user_information.php"><span class="edu-icon edu-locked author-log-ic"></span>My Profile</a>
                                                        <li><a href="logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>


                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="breadcome-list">
                        <ul class="breadcome-menu">
                            <li>
                                <div id="countdowntimer" style="display: block;"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script type="text/javascript">
        setInterval(function() {
            timer();
        }, 1000);

        function timer() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                    if (xmlhttp.responseText == "00:00:01") {
                        window.location = "result.php";
                    }

                    document.getElementById("countdowntimer").innerHTML = xmlhttp.responseText;

                }
            };
            xmlhttp.open("GET", "extend/load_timer.php", true);
            xmlhttp.send(null);
        }
    </script>