<?php
$servername="localhost";
$username="root";
$password="";
$database="php_project";
// $con = mysqli_connect($servername,$username,$password,$database);
//   $servername="localhost";
//   $username="id15234340_294047";
//   $password="@294047sem5IP";
//   $database="id15234340_294047sem5ip";

  $con = mysqli_connect($servername,$username,$password,$database);

#For uploading Files 
$File_path = $con->real_escape_string('pdf/'.$_FILES['file']['name']);

if (!$con)
  {
    /*error_log("Failed to connect to MySQL: " . mysqli_error($con));*/
    die('Internal server error');
  }
/*mysqli_select_db($con,$database);*/


#For File upload 
if (preg_match("!pdf!",$_FILES['file']['type'])) {
            
//   //copy pdf to pdf / folder 
if (copy($_FILES['file']['tmp_name'], $File_path)){


$sql = "INSERT INTO professor( First_name , Last_name, College_ID_number , Department, Title,
 Conference , Venue , Stage , Academic_Year , DATE , ISBN , Start_page_number , End_page_number , Link, file_name)
VALUES ('$_POST[fname]','$_POST[lname]','$_POST[id]','$_POST[dept]','$_POST[title]','$_POST[conf]','$_POST[venue]',
'$_POST[stage]','$_POST[academic_year]','$_POST[Date]','$_POST[isbn]','$_POST[page_start]','$_POST[page_end]','$_POST[link]', '$File_path')";
  


  

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

  else{
    echo '<script>alert("Please Upload only PDF File.")</script>';
  }
}
}
else
{
    echo "Please Upload only PDF File";
}

mysqli_close($con)
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Professor</title>
    <link rel="shortcut icon" href="../img/vcet.png" type="image/x-icon">
<style>
    body, .container-fluid{
        background-color: #eff5f5;
    }
    .center{
        text-align: center;
    }

    
</style>
</head>

<body>

    <div class="container-fluid">
        <div id="message_block" class="d-flex justify-content-center mt-2">
            
        </div><br>
        <div class="d-flex justify-content-center flex-wrap">
            <div>
            <!--<form action="view.php">
                <input class="btn btn-primary bg-secondary mt-2 ml-2" type="submit" value="View Research Paper Details">
            </form>-->
            <!-- <a href="../php/view_p.php" class="btn btn-primary bg-secondary mt-2 ml-2" role="button">View Research Paper Details</a>
            </div> -->
            
            <div>
            <a href="../index.php" class="btn bg-success text-light border border-rounded mt-2 ml-2" role="button"><h3>Back to Home Page</h3></a>
                <!--<button type="button" class="btn btn-primary bg-secondary mt-2 ml-2" onclick="index.html">Back to Home Page</button>-->
            </div>

            <!-- <button id="myButton" class="btn bg-dark text-light" >View Research Paper Details</button> -->
            <!-- <button type="button" class="btn bg-dark text-light" onclick=window.location.href ="view.php" >View Research Paper Details</button> -->
            <!-- <a href="function()" class="view">View Research Paper</a> -->
        </div>
    </div>
<script>
    message = <?php echo json_encode($record_added_message); ?>;
    if(message=='Record Added Successfully'){
        var message_h1 = "<h1>Record Added Successfully.</h1>";
            document
                .getElementById("message_block")
                .innerHTML = message_h1;
     }
     else{
        var message_h1 = "<h1>Internal Server Error, Please try after some time.</h1>";
            document
                .getElementById("message_block")
                .innerHTML = message_h1;
     }

</script>
</body>
</html>