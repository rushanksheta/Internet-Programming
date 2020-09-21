<html>
<body>
<script>
    /*function back(){
        window.location = "home.html";
    }
    */
</script>
<?php
$servername="localhost";
$username="root";
$password="";
$database="php_project";
$con = mysqli_connect($servername,$username,$password,"php_project");

$File_path = $con->real_escape_string('pdf/'.$_FILES['file']['name']);
if (!$con)
  {
    die('Internal server error');
  }

if (preg_match("!pdf!",$_FILES['file']['type'])) {
            
    //copy pdf to pdf / folder 
  if (copy($_FILES['file']['tmp_name'], $File_path)){

    $sql = "INSERT INTO student( First_name ,Last_name , ID ,Year,Department,Title,Conference , Venue ,Stage ,DATE ,ISBN , P_P, file_name) VALUES 
    ('$_POST[fname]','$_POST[lname]','$_POST[id]','$_POST[year]','$_POST[dept]','$_POST[title]','$_POST[conf]','$_POST[venue]','$_POST[stage]','$_POST[Date]','$_POST[isbn]','$_POST[p_p]','$File_path')";

    if (!mysqli_query($con,$sql)){
      die('Error: ' . mysqli_error($con));
    }
    else{
      echo "1 record added";
    }
  }
}
else{
  echo "Please upload PDF file";
}

mysqli_close($con)
?>
<br> <br>
</body>
</html>