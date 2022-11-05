<?php
if(isset($_POST['signup_btn'])){
    session_start();
        
        $conn = mysqli_connect("localhost", "root", "", "project");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
    $u=$_POST['username'];
    $p=$_POST['password'];
    $sql = "INSERT INTO login(username, password , name)
VALUES ('$u', '$p', '$u')";

if ($conn->query($sql) === TRUE) {
    header("location:login.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

    
}



?>