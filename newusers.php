<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' href='fav2.png' type='image/x-icon' sizes="16x16" />
 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 	 <script type="text/javascript" href="validation.js"></script>
 	 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 	  <style>
  	
	form{
		background: #f7f7f7;
		padding: 30px;
		margin-bottom: 15px;
		box-shadow: 10px 10px 10px rgba(0,0,0,0.3);
		opacity: 0.9;

	}
	.second{
		margin: 50px auto
	}
	.second{
		display:  none;
	}
	body{
		/* background-image: url('background.png'); */
		background-color: WHITE;
	}
	h4{
		margin: 0px 20px 20px 60px;
	}
	#member{
		margin: 200px 0px 0px 0px;
	}
  </style>
   <script>
  	function verify(){
			var username=document.getElementById("name").value
			var password=document.getElementById("password").value;
			var rpass=document.getElementById("rpassword").value;
			if (username==""||rpass=="") {
				swal({
					icon:"warning",
					title:"fields can't be blank",
				});
				return false;

			}
			
			
		} 
	</script>
</head>
<body>
	<div class="fm container mt-5">
		<div class="row">
			<div class="col-md-12">
	<form method="post" action="newusers.php" onsubmit="return verify()">
		
		<div class="form-group">
            <label for="name">Name <span class="text-danger">*</span> </label>
            <input type="text" class="form-control" placeholder="Please Enter your name" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="mobile_number">phone and WhataApp number <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Enter Your number" id="phone" name="phone" required>
          </div>
          <div class="form-group">
            <label for="address">Address <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Enter Your Address" id="address" name="address" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" placeholder="Enter Your email" id="email" name="email" required>
		  </div>
		  <div class="form-group">
            <label for="skill">Skills</label>
            <input type="name" class="form-control" placeholder="Enter Your skills" id="skill" name="skill" required>
          </div>

          
          <div class="form-group">
            <label for="qualification">Qualification:  <span class="text-danger">*</span></label>
              <select name="qualification" id="qualification" class="form-control" required>
              <option value="">choose Qualification</option>
              <?php
                
                $res=\mysqli_query($conn,"SELECT qual FROM `qualification`");
                $row = mysqli_num_rows($res);


                            echo "<select name='qualification'>";
                            while ($row = mysqli_fetch_array($res)){
                                echo "<option value='". $row['qual'] ."'>" .$row['qual'] ."</option>" ;
                            }
                            echo "</select>" ;

                ?>
                
                <!-- <option value="">10th</option>
                <option value="">12th</option>
                <option value="">Degree</option>
                
                <option value="">Under Graduate</option>
                <option value="">Graduate</option>
                <option value="">Post Graduate</option>
                <option value="">Below SSC</option>
                <option value="">Other</option> -->
              </select>
          </div>
          <div class="form-group mt-lg-2">
            <label for="Experience">Experience</label>
            <select name="years" id="years">'
				<option value="">years</option>
				<option value="">1</option>
				<option value="">2</option>
				<option value="">3</option>
				<option value="">4</option>
				<option value="">5</option>
				<option value="">6</option>
				<option value="">7</option>
			</select>
			<select name="months" id="months">
				<option value="">months</option>
				<option value="">1</option>
				<option value="">2</option>
				<option value="">3</option>
				<option value="">4</option>
				<option value="">5</option>
				<option value="">6</option>
				<option value="">7</option>
				<option value="">8</option>
				<option value="">9</option>
				<option value="">10</option>
				<option value="">11</option>
				<option value="">12</option>
				
			</select>
          </div>
          <div class="form-group mt-lg-2">
            <label for="resume">Resume</label>
            <input type="file" class="" placeholder="Enter Your number" id="file" name="file">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
</div>
</div></html>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $skill = $_POST['skill'];
        $qualification= $_POST['qualification'];
        $years = $_GET['years'];
        $months = $_GET['months'];
        $resume = $_POST['file'];
        
      
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
        $sql = "INSERT INTO `available_workers` (`Name`, `Phone_no`, `Address`, `E-Mail`, `Skills`, `Qualification`, `Experience`, `Resume`) VALUES ('$name', '$phone', '$address', '$email', '$skill', '$qualification', '$years-$months-00','$resume')";
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