<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
	th,td{
		border: 1px solid black;
		padding: 3px;
		color: #00ACFE;
    	font-size: 19px;
	}
	table{
		border: 2px solid black;
		margin-top: 30px!important;
		margin: 0 auto;
	}
	h1{
		text-align: center;
    	color: #00acec;
	}
</style>

</head>
<body>
<h1>rentenlistings</h1>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "rentenlistings";
	$link = new mysqli($servername, $username, $password, $dbname);

	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}



	$sql = "SELECT * FROM listings";
	if($result = mysqli_query($link, $sql)){
	    if(mysqli_num_rows($result) > 0){
	        echo "<table>";
	            echo "<tr>";
	                echo "<th>RenteeID </th>";
	                echo "<th>AddressID</th>";
	                echo "<th>Description</th>";
	                echo "<th>Price</th>";
	            echo "</tr>";
	        while($row = mysqli_fetch_array($result)){
	            echo "<tr>";
	                echo "<td>" . $row['RenteeID'] . "</td>";
	                echo "<td>" . $row['AddressID'] . "</td>";
	                echo "<td>" . $row['Description'] . "</td>";
	                echo "<td>" . $row['Price'] . "</td>";
	            echo "</tr>";
	        }
	        echo "</table>";
	        // Free result set
	        mysqli_free_result($result);
	    } else{
	        echo "No records matching your query were found.";
	    }
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}


	 
	// Close connection
	mysqli_close($link);

	?>
</body>
</html>