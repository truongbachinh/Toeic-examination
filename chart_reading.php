<?php
session_start();
include "header_user.php";
include "connection.php";
?>

<?php
$i = 0;
$day = 15;  // 15 ngay gan day (muon bao nhieu ngay thay doi o day)
$result = [];
while ($i < $day) {
    $date = new DateTime();
    $date->modify("-" . $i . " day");
    $date = $date->format("Y-m-d");
    $query = "SELECT correct_answer from exam_result where exam_time = '$date' and username ='$_SESSION[username]' and exam_type = 'Reading'";
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
        if ($correctAnswer >= 1) {
            //$totalPass += $correctAnswer;
            $iPass++;
        } else {
            //$totalFail += $correctAnswer;
            $iFail++;
        }
    }
    // $avgPass = 0;
    // $avgFail = 0;
    // if ($iPass != 0) $avgPass = $totalPass / $iPass;
    // if ($iFail != 0) $avgFail = $totalFail / $iFail;
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
                text: "The reading examination you have taken in the last 15 days."
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
                name: "Examination Fail",
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

<body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
<?php
include "footer.php"
?>