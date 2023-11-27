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
    <form action ="update.php" method = "post">
    <?php
      include('connect.php');
      $username =trim($_POST["username"]);
      $pswd =trim($_POST["pswd"]);
      //$cmd = "SELECT * FROM m6 WHERE s_id like '$username' and s_name like '%".$pswd."%' ";
      $cmd = "SELECT * FROM m6 WHERE s_id like '$username' and s_name like '$pswd' ";
      $result = mysqli_query($conn,$cmd);
      $row =mysqli_fetch_array($result);
      if ($row =="")
      {
          ?>
          <script language "javascript">
              alert ('Incorrect Username or Password');
              window.history.back();
          </script>
          <?php
      }
      else
      {
            $s_name = $row["s_name"];
		    $s_surname= $row["s_surname"];
            $s_class = $row["s_class"];
		    $s_address= $row["s_address"];
            $s_lineid = $row["s_lineid"];
		    $s_phone= $row["s_phone"];
            $s_email = $row["s_email"];
		    $s_birth= $row["s_birth"];
      ?>        
      <div class="mb-3 mt-3">
            <label>Student ID:</label>
            <input type="text" class="form-control" name="username" value ="<?php echo $username; ?>" readonly >
        </div>
        <div class="mb-3">
            <label>Student Name:</label>
            <input type="text" class="form-control" name="s_name" value ="<?php echo $s_name; ?>" readonly>
        </div>
        <div class="mb-3">
            <label>Student Surname:</label>
            <input type="text" class="form-control" name="s_surname" value ="<?php echo $s_surname; ?>" readonly>
        </div>
        <div class="mb-3">
            <label>Student Class:</label>
            <input type="text" class="form-control" name="s_class" value ="<?php echo $s_class; ?>" readonly>
        </div>
        <div class="mb-3">
            <label>Student Address:</label>
            <input type="text" class="form-control" name="s_address" value ="<?php echo $s_address; ?>" required>
        </div>
        <div class="mb-3">
            <label>Student Phone Number:</label>
            <input type="text" class="form-control" name="s_phone" value ="<?php echo $s_phone; ?>">
        </div>
        <div class="mb-3">
            <label>Student Line ID:</label>
            <input type="text" class="form-control" name="s_lineid" value ="<?php echo $s_lineid; ?>">
        </div>
        <div class="mb-3">
            <label>Student birthday:</label>
            <input type="text" class="form-control" name="s_birth" value ="<?php echo $s_birth; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    <?php
      }
    ?>
    </form>
</div>
</body>
</html>