<!DOCTYPE html>
<html lang="en">
<head>
  <title>AC 138 Yearbook</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
<div class="container mt-3">
<h1>AC 138 Yearbook</h1>
<?php
include('connect.php');
$s_class = $_POST["s_class"];
$cmd ="SELECT * FROM m6 Where s_class like '$s_class' order by 's_no' ";
$result = mysqli_query($conn,$cmd);
while ($row = mysqli_fetch_array($result))
{
?>
  <div class="row">
    <div class="col-sm-4 p-3">Student Class</div>
    <div class="col-sm-8 p-3"> <? echo $row["s_class"];?> </div>
  </div>
  <div class="row">
    <div class="col-sm-4 p-3">Student No</div>
    <div class="col-sm-8 p-3"><? echo $row["s_no"];?></div>
  </div>
  <div class="row">
    <div class="col-sm-4 p-3">Student ID</div>
    <div class="col-sm-8 p-3"><? echo $row["s_id"];?></div>
  </div>
  <div class="row">
    <div class="col-sm-4 p-3">Student Name-Surname</div>
    <div class="col-sm-8 p-3"><? echo $row["s_name"]." ".$row["s_surname"];?></div>
  </div>
  <div class="row">
    <div class="col-sm-4 p-3">Address</div>
    <div class="col-sm-8 p-3"><? echo $row["s_address"];?></div>
  </div>
  <div class="row">
    <div class="col-sm-4 p-3">Phone</div>
    <div class="col-sm-8 p-3"><? echo $row["s_phone"];?></div>
  </div>
  <div class="row">
    <div class="col-sm-4 p-3">LineID</div>
    <div class="col-sm-8 p-3"><? echo $row["s_lineid"];?></div>
  </div>
  <div class="row">
    <div class="col-sm-4 p-3">Birthday</div>
    <div class="col-sm-8 p-3"><? echo $row["s_birth"];?></div>
  </div>
  <hr>
<?php
}
?>
</div>

</body>
</html>
