<?php
include "header.php";
include "connection.php"
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"><a href="chart.php" class="tip-bottom"><i class="icon-home" style="color: red;"></i>
        <p1>Dashboard</p1>
      </a>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
      <div class="widget-content nopadding">
        <div class="widget-title"> <span class="icon"> <i class="icon-tag"></i> </span>
          <h5>Exam Categories</h5>
        </div>
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Id</th>
              <th>Examination Name</th>
              <th>Time Do Examination</th>
              <th>Select</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $res = mysqli_query($link, "select * from exam_for_user");
            while ($row = mysqli_fetch_array($res)) {
            ?>
              <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["exam"]; ?></td>
                <td><?php echo $row["time_do_exam"]; ?></td>
                <td><a href="question.php?id=<?php echo $row["id"]; ?>">Select</a></td>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <?php
  include "footer.php";
  ?>