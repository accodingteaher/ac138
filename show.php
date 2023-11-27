<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>AC 138 YearBook</title>
</head>

<body >

<div class="container mt-3">  
<?php
include('connect.php');
$s_class= $_POST["s_class"];
echo "<h1><center>".$s_class." Members </center></h1>";
$cmd = "SELECT *  FROM m6 Where s_class like '$s_class' Order by 's_no'";
$result = mysqli_query($conn,$cmd);
//$row =mysqli_fetch_array($result);
while($row=mysqli_fetch_array($result))
{
	$s_id = $row["s_id"];
	$s_no = $row["s_no"];
	$s_name = $row["s_name"];
	$s_surname= $row["s_surname"];
	$s_class= $row["s_class"];
	$s_address= $row["s_address"];
	$s_phone= $row["su_phone"];
	$s_lineid= $row["s_lineid"];
	$s_birth= $row["s_birth"];
    $s_image = "images/".$s_id.".jpeg";
    echo "<img src=".'images/'.$s_id.'.jpeg'." style='width:20%'/>";
	?>
<div class="row">
    <div class="col-sm-3 p-3">Student No:</div>
    <div class="col-sm-3 p-9"><?php echo $s_no; ?></div>
</div>
<div class="row">
    <div class="col-sm-3 p-3">Student ID:</div>
    <div class="col-sm-3 p-9"><?php echo $s_id; ?></div>
</div>
<div class="row">
    <div class="col-sm-3 p-3">Student Name-Surname:</div>
    <div class="col-sm-3 p-9"><?php echo $s_name." ".$s_surname; ?></div>
</div>
<div class="row">
    <div class="col-sm-3 p-3">Student Address:</div>
    <div class="col-sm-3 p-9"><?php echo $s_address; ?></div>
</div>
<hr>
<?php
}
?>
<br>
		<button onclick="window.history.back()" class="btn btn-primary">Go Back</button>
</div>
</body>
</html>
