<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Registration Portal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <!-- navigation bar -->
    <style>
body {
  background-image: url('images/img2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 1800px 800px;
}
</style>

    <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
              <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about1.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Donate</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="contact.php" tabindex="-1" aria-disabled="true">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="topright" href="/WTProject/logout.php" tabindex="-1" aria-disabled="true">Logout</a>
            </li>
          </ul>
        </div>
        
        <div class="card-body mt-5">
        
          <h5 class="card-title">Best Platform to get A Job or get Employees</h5>
          
          <a href="owners.php" class="btn btn-warning">I want workers </a>
          <a href="newusers.php"><button class="btn btn-warning">I want work</button></a>
          <hr>
          <a href="display2.php"><button class="btn btn-success">All Available Jobs</button></a>
          <a href="display.php"><button class="btn btn-success">All Available Workers</button></a>
        </div>
      </div>
      <?php include 'footer.php';?>

    <!-- end navigation -->
</body>
</html>

