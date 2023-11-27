<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AC 138 YearBook</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-3">    
    <h2>AC 138 YearBook</h2>
    <form method="post" action="<?=$_SERVER['PHP_SELF'];?>">   
        <div class="mb-3">
        <select class="form-select" id="s_class" name="s_class">
            <option> - </option>
            <option value="M.6/1">M.6/1</option>
            <option value="M.6/2">M.6/2</option>
            <option value="M.6/3">M.6/3</option>
            <option value="M.6/4">M.6/4</option>
            <option value="M.6/5">M.6/5</option>
            <option value="M.6/6">M.6/6</option>
            <option value="M.6/7">M.6/7</option>
            <option value="M.6/8">M.6/8</option>
            <option value="M.6/9">M.6/9</option>
            <option value="EP-M.6/1">EP-M.6/1</option>
            <option value="EP-M.6/2">EP-M.6/2</option>
   </select>
        </div>
        <div class="mb-3">
            <label>Student No:</label>
            <input type="text" class="form-control" name="s_no">
        </div>  
      <div class="mb-3 mt-3">
            <label>Student ID:</label>
            <input type="text" class="form-control" name="s_id">
        </div>
        <div class="mb-3">
            <label>Student Name:</label>
            <input type="text" class="form-control" name="s_name"
        </div>
        <div class="mb-3">
            <label>Student Surname:</label>
            <input type="text" class="form-control" name="s_surname">
        </div>

        <button type="submit" name="SubmitButton" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
<?php
if(isset($_POST['SubmitButton']))
{
    include('connect.php');
    $s_id = $_POST["s_id"];
    $cmd = "SELECT * FROM m6 WHERE s_id like '$s_id'";
    $result = mysqli_query($conn,$cmd);
    $row =mysqli_fetch_array($result);
    if ($row =="")
    {
        $s_name = $_POST["s_name"];
        $s_surname= $_POST["s_surname"];
        $s_class = $_POST["s_class"];
        $s_no = $_POST["s_no"];
        $sql= "INSERT INTO m6(s_class, s_no, s_id, s_name, s_surname) VALUES ('$s_class','$s_no','$s_id','$s_name','$s_surname')"; 
        if ($conn->query($sql) === false)
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        else
        {
            echo "<h2>Added New Recored</h2>";
        }

    }
    else
    {
        ?>
        <script language "javascript">
            alert ('รหัสนักเรียนซ้ำ');
            window.location.href("addnew.php")
        </script>
        <?php
    }
}
?>     