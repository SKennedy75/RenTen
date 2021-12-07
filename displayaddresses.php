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

  //Mysqli is used to pull data from the database and display it

  // New mysqli connection
  $sqli = new mysqli("127.0.0.1", "renten", "");

  // Check connection
  if ($sqli->connect_error) {
    die("Unable to make a connection: " . $sqli->connect_error);
  }

  //Pull all data from the addresses table of the SQL database
  $pull = "SELECT * FROM addresses";

  // Output variable is what you get when pulling from database
  $output = $sqli->query($pull);

  // Check to see that you have actual output from your query
  if ($output->num_rows > 0) {
    // Output of each row with all the addresses columns
    while($row = $output->fetch_assoc()) {
      echo "ID: " . $row["AddressID"]. " - State: " . $row["StateName"]. " -City:" . $row["City"]. "'\n' - Zipcode " . $row["Zipcode"]. " - Street " . $row["Street"]."<br>";
    }
  // If no addresses exist, print that
  } else {
    echo "No addresses found";
  }
  // Close the connection
  $sqli->close();
  ?>
</body>
</html>