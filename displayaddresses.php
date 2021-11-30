<?php

//Mysqli is used to pull data from the database and display it

// New mysqli connection
$conn = new mysqli("127.0.0.1", "renten", "");

// Check connection
if ($conn->connect_error) {
  die("Unable to make a connection: " . $conn->connect_error);
}

$sql = "SELECT * FROM addresses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["AddressID"]. " - State: " . $row["StateName"]. " " . $row["City"]. " " . $row["Zipcode"]. " " . $row["Street"]."<br>";
  }
} else {
  echo "No addresses found";
}
$conn->close();
?>