      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "jobregistration";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      $query="SELECT * FROM available_workers";
      $data=mysqli_query($conn,$query);
      $total=mysqli_num_rows($data);
      //echo "$total";
      $result=mysqli_fetch_assoc($data);

      //echo $result['Name']." ".$result['Phone_no']." ".$result['Address']." ".$result['E-Mail']." ".$result['Skills']." ".$result['Qualification']." ".$result['Experience']." ".$result['Resume'];
      ?>

<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8">
    <a href="index.php"><button class="btn btn-success">Home</button></a> 
    <title>Available Workers</title> 
    <!-- CSS FOR STYLING THE PAGE --> 
    <style> 
        table { 
            margin: 0 auto; 
            font-size: large; 
            border: 1px solid black; 
        } 
  
        h1 { 
            text-align: center; 
            color: #006600; 
            font-size: xx-large; 
            font-family: 'Gill Sans', 'Gill Sans MT',  
            ' Calibri', 'Trebuchet MS', 'sans-serif'; 
        } 
  
        td { 
            background-color: #E4F5D4; 
            border: 1px solid black; 
        } 
  
        th, 
        td { 
            font-weight: bold; 
            border: 1px solid black; 
            padding: 10px; 
            text-align: center; 
        } 
  
        td { 
            font-weight: lighter; 
        } 
    </style> 
</head> 
  
<body> 
    <section> 
        <h1>All Availbale Workers</h1> 
        <!-- TABLE CONSTRUCTION--> 
        <table> 
            <tr> 
                <th>Name of Candidate</th> 
                <th>Phone No.</th> 
                <th>Address</th> 
                <th>E-Mail</th> 
                <th>Skills</th> 
                <th>Qualification</th> 
                <th>Experience</th> 
                <th>Resume</th> 
            </tr> 
            <!-- PHP CODE TO FETCH DATA FROM ROWS--> 
            <?php   // LOOP TILL END OF DATA  
                while($rows=$data->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                <td><?php echo $rows['Name'];?></td> 
                <td><?php echo $rows['Phone_no'];?></td> 
                <td><?php echo $rows['Address'];?></td> 
                <td><?php echo $rows['E-Mail'];?></td>
                <td><?php echo $rows['Skills'];?></td> 
                <td><?php echo $rows['Qualification'];?></td> 
                <td><?php echo $rows['Experience'];?></td> 
                <td><?php echo $rows['Resume'];?></td>
            </tr> 
            <?php 
                } 
             ?> 
        </table> 
    </section> 
</body> 
  
</html> 


