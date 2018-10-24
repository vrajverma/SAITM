

<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "details";

//---------CONNECTION ESTABLISH PART---------
$connection = new mysqli($server,$user,$pass,$dbname);
if ($connection)
	{
		echo "Connection OKAY";
	}
else
	{
		die("DATABASE NOT FOUND!!!".mysqli_connect_error());
	}


if(isset($_POST['submit']))
	{
		$na = $_POST['name'];
		$cl = $_POST['class'];
		$rn = $_POST['rollno'];
		$cn = $_POST['contact'];
		
			if($na != "" && $cl != "" && $rn != "" && $cn != "")
				{
					$query1 = "INSERT INTO SCHOOL VALUES('$na', '$cl', '$rn', '$cn')";
					$connection -> query($query1);
	 					if ($connection)
	 						{
	 							echo "DATA STORED SUCCESSFULLY!!!";
	 						}
	 					else 
	 						{
	 							die("DATA NOT STORED!!!".mysqli_connect_error());
	 						}
	 			}
		else
 			{
 				echo "Fill all the textfields";
			}
	}
mysqli_close($connection);

?>