<?php
// $servername="localhost";
// $username="root";
// $password="";
// $database="php_project";
// $con = mysqli_connect($servername,$username,$password,$database);
$conn = mysqli_connect("localhost","root","","exp1");
if (!$conn)
  {
    /*error_log("Failed to connect to MySQL: " . mysqli_error($con));*/
    die('Internal server error');
  }
    $password  = $_POST['password'];
    $md5_password  = md5($password);
    $sql = "INSERT INTO exp1(name, mobile, email, address, username, password)
    VALUES ('$_POST[name]','$_POST[mobile]','$_POST[email]','$_POST[address]','$_POST[username]','$md5_password ')";
    
  if($conn->query($sql) === TRUE)
  {
      
      echo '
      <script>
          alert("You have successfully signed up");
          window.location.href = "index.html";
      </script>';
  }
  else
  {
      echo "Error".$conn->error;
  }
  
  mysqli_close($conn);//close connection
?>