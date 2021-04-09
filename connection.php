<?php

$username="root";
$password="";
$server='localhost';
$db='jobregistration';

$con =mysqli_connect($server,$username,$password,$db);

if($con){
	//echo "connection successfull";
	?>

    <script>
    	alert("Connection Successfull");
    </script>

	<?php
}else{
	echo "no connection";
}
?>