<?php
session_start();
include "header.php";
include "connection.php";
?>

<?php
$i = 0;
$day = 15;  // 15 ngay gan day
$result = [];
while ($i < $day) {
    $date = new DateTime();
    $date->modify("-" . $i . " day");
    $date = $date->format("Y-m-d");
    $query = "SELECT correct_answer from exam_result where exam_time = '$date'";
    $result[$i] = mysqli_query($link, $query);
    $result[$i]->date = $date;
    $i++;
}

$dataPoints1 = [];
$dataPoints2 = [];
foreach ($result as $element) {
    $iPass = 0;
    $iFail = 0;
    //$totalPass = 0;
    //$totalFail = 0;
    while ($row = mysqli_fetch_array($element)) {
        $correctAnswer = (int) ($row["correct_answer"]);
        if ($correctAnswer >= 3) {
            //$totalPass += $correctAnswer;
            $iPass++;
        } else {
            //$totalFail += $correctAnswer;
            $iFail++;
        }
    }

    array_push($dataPoints1, array("label" => $element->date, "y" => $iPass));
    array_push($dataPoints2, array("label" => $element->date, "y" => $iFail));
}


?>
<script>
    window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2",
            title: {
                text: "Examination pass and failed of all student."
            },
            legend: {
                cursor: "pointer",
                verticalAlign: "center",
                horizontalAlign: "right",
                itemclick: toggleDataSeries
            },
            data: [{
                type: "column",
                name: "Examination Pass",
                indexLabel: "{y}",
                yValueFormatString: "#0.##",
                showInLegend: true,
                dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
            }, {
                type: "column",
                name: "Examination Failed",
                indexLabel: "{y}",
                yValueFormatString: "#0.##",
                showInLegend: true,
                dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();

        function toggleDataSeries(e) {
            if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                e.dataSeries.visible = false;
            } else {
                e.dataSeries.visible = true;
            }
            chart.render();
        }

    }
</script>
<div id="content">
    <div id="content-header">
        <div id="breadcrumb">
            <a class="tip-bottom"><i class="icon-home"></i>DashBoard</a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-flag"></i> </span>
                        <h5>Chart</h5>
                    </div>
                </div>
                <div class="widget-box">
                    <div id="chartContainer" style="height: 370px; width: 100%; "></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



<?php
include "footer.php"
?>