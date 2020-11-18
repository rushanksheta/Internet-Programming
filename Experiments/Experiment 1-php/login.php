<?php
// $servername="localhost";
// $username="root";
// $password="";
// $database="php_project";
// $con = mysqli_connect($servername,$username,$password,$database);
$con = mysqli_connect("localhost","root","","exp1");
if(!$con)
{
    die('could not connect'.mysql_error());
}
else{   
    $username = $_POST['username']; 
    $password = $_POST['password'];
    $md5_Password = md5($password);
    
    $sql = "SELECT * FROM exp1 WHERE username = '$username' AND password = '$md5_Password'";
    //$result =mysqli_query($con,$sql);
    $result = $con->query($sql);
    $count = mysqli_num_rows($result);
    if ($count>0)
    {
        echo "<script>alert('Login Successful');
        window.location.href = 'index.html';</script>";
        
        exit();
    }
    else{
        echo "<script>alert('Incorrect Username or Password');
        window.location.href = 'index.html';</script>";

    }
}
mysqli_close($con)
?>