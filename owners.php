<!DOCTYPE html>
<html lang="mr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>owners</title>
</head>
<body>
    <div class="fm container mt-5">
		<div class="row">
			<div class="col-md-12">
	<form method="post" action="owners.php" onsubmit="return verify()">
		
		<div class="form-group">
            <label for="name">नाव<span class="text-danger">*</span> </label>
            <input type="text" class="form-control" placeholder="तुमच नाव" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="business">व्यवसायाचं नाव<span class="text-danger">*</span> </label>
            <input type="text" class="form-control" placeholder="व्यवसायाचं नाव" id="business" name="business" required>
          </div>
          <div class="form-group">
            <label for="post">कामगार पाहिजे</label>
            <input type="name" class="form-control" placeholder="Position for which workers needed " id="post" name="post" required>
          </div>
          <div class="form-group">
            <label for="mobile_number">फोन नंबर <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="फोन नंबर" id="mobile_number" name="mobile_number" required>
          </div>
          <div class="form-group">
            <label for="address">पत्ता<span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="पत्ता" id="address" name="address" required>
          </div>
          <div class="form-group">
            <label for="email">ई-मेल </label>
            <input type="email" class="form-control" placeholder="ई-मेल" id="email" name="email" required>
		  </div>
        <div>
          <label for="salary">पगार</label>
          <!-- <input type="text" name="salary" class="form-control" placeholder="पगार किती द्याल"> -->
          <select name="salary" id="" class="form-control">
            <option value="">पगार किती द्याल</option> 
            <option value="">0-1000</option>
            <option value="">1001-5000</option>
            <option value="">5001-10000</option>
          </select>
        </div>
          <button type="submit" class="btn btn-primary">जतन करा</button>
	</form>
	</div>
</div>
</div>
</body>
</html>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $business = $_POST['business'];
        $post = $_POST['post'];
        $mobile_number = $_POST['mobile_number'];
        $address = $_POST['address'];
        $email= $_POST['email'];
        $salary = $_POST['salary'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "jobregistration";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `available_jobs` (`Name`, `Business Name`, `workers_want_for`, `Phone_no`, `Address`, `E-mail`, `Salary`) VALUES ('$name', '$business', '$post', '$mobile_number', '$address', '$email', '$salary');";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }

    
?>