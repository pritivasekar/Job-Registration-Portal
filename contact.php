<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="contact.css">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<title>Contact Us</title>
<script>
function validateform(){  
  var uname= contact.name.value; 
var mail=contact.email.value;
var flag= false;
var msg; 
if (uname.trim() === "") {
    flag=true;
    msg= "Please enter your name\n"
     
    }
if (mail.trim() === "") {
    flag=true;
    str="Please enter your email\n"
    msg=msg+str
     
    }    
     
    if(flag)
    {
        alert("warning\n"+msg);
        return false;
    }
    else{
        return true;
    }
}  
</script>
<body>
  
<div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
              <a class="nav-link " href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about1.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Donate</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" href="contact.php" tabindex="-1" aria-disabled="true">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="topright" href="/WTProject/logout.php" tabindex="-1" aria-disabled="true">Logout</a>
            </li>
          </ul>
        </div>
        <div class="container">  
  <form id="contact" name="contact" action="" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input name="name" placeholder="Your name" type="text" tabindex="1" >
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" onclick="return validateform()">Submit</button>
    </fieldset>
  </form>
 
  
</div>
<?php include 'footer.php';?>
</body>
</html>