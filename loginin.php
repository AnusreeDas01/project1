<?php
if(isset($_POST['login_btn'])){
    session_start();
        
        $conn = mysqli_connect("localhost", "root", "", "project");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
    $u=$_POST['username'];
    $p=$_POST['password'];
    $sql = "SELECT * FROM login WHERE username='$u'";
    $result = $conn->query($sql);
    while($row = mysqli_fetch_array($result)){
        $uu=$row['username'];
        $pp=$row['password'];
        if($u==$uu && $p==$pp){
            $_SESSION['name']=$row['name'];
            header("location:index.php");
        }
        else{
            echo "wrong password";
        }
    }
    
}



?>