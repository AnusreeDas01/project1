<?php

    session_start();
        
        $conn = mysqli_connect("localhost", "root", "", "project");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }

        $sql = "SELECT * FROM data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name:" . $row["name"]. "< >Id: " . $row["id"] . "<br>Quantity:" . $row["quantity"] . "<br>Purchase Date: " . $row["purchase_date"]. "<br>Expiry Date: " . $row["expiry_date"]. "<br>Bill: " . $row["bill"]. "<br>Note: " . $row["note"];
  }
} else {
  echo "0 results";
}

        ?>