<html>
    <body>


<?php
if ($_SERVER['REQUEST_METHOD'] =='POST'){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$Roll=$_POST['RollNumber'];


$gender=$_POST['Gender'];
$sem=$_POST['sem'];
$phone=$_POST['phone'];
$branch=$_POST['branch'];

$servername = "localhost:3306";
$username = "root";
$password = "fcrit@123";
$dbname = "trip";
}

$host = 'localhost:3306';  
$user = 'root';  
$pass = 'fcrit@123';  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(! $conn )  
{  
    
  die('Could not connect: ' . mysqli_error());  
}  

else{
 
}

$sql1="SELECT firstname FROM trip_info where roll='$Roll'";

$sql2 = "INSERT INTO trip_info  VALUES ('$Roll','$firstname','$lastname','$email','$phone','$sem','$branch','$gender')";
if($result=mysqli_query($conn,$sql1)){
    
    $name=mysqli_num_rows($result);
    if($name>0){
        echo '<script>alert("User exist")</script>';
?>
<a href="index.php">GO back</a>
<?php

    }
    else{

        if($result2=mysqli_query($conn,$sql2)){
            echo "Registration is done";
        }
        else{
            echo "Registration failed ,not done";
        }
    }
}



// }



// Close connection
mysqli_close($conn);
?>


</body>
    </html>