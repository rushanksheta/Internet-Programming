<html>
<body>
<head>
  <title>View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
    function back(){
        window.location = "index.html";
    }

    
    </script>
    <style>
    *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    }


        table{
        width: 95%;
        margin: 1%;
        border-style:solid;
        border-width:2px;
        border-color: #5F9EA0;
        }
        
        td{
            padding: 0.3%;
            text-align:center;
            border: 1px solid black;
            }
        .columns{
            font-weight:bold;
        }
        
</style>
    </head>
<?php
$servername="localhost";
$username="root";
$password="";
$database="php_project";
$con = mysqli_connect($servername,$username,$password,"php_project");

$query = "SELECT * FROM student";
echo "<h3><b> <center>Research Paper Records</center> </b></h3>";
echo '
<table class="table-hover">
<caption><b>Student Records:</b></caption> 
      <tr class="columns" style="background-color: #B0C4DE;"> 
          <td> <font face="Arial">First name</font> </td> 
          <td> <font face="Arial">Last name</font> </td> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">Year</font> </td> 
          <td> <font face="Arial">Department</font> </td> 
          <td> <font face="Arial">Title</font> </td> 
          <td> <font face="Arial">Conference</font> </td> 
          <td> <font face="Arial">Venue</font> </td> 
          <td> <font face="Arial">Stage</font> </td> 
          <td> <font face="Arial">Date</font> </td> 
          <td> <font face="Arial">ISBN</font> </td> 
          <td> <font face="Arial">P_P</font> </td> 
          <td> <font face="Arial">File name</font> </td> 
      </tr>';

if ($result = $con->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["First_name"];
        $field2name = $row["Last_name"];
        $field3name = $row["ID"];
        $field4name = $row["Year"];
        $field5name = $row["Department"]; 
        $field6name = $row["Title"]; 
        $field7name = $row["Conference"]; 
        $field8name = $row["Venue"]; 
        $field9name = $row["Stage"];
        $field10name = $row["DATE"];
        $field11name = $row["ISBN"];
        $field12name = $row["P_P"];
        $field13name = $row["file_name"];
        
        echo '
        <div class="table-responsive">
        <tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td> 
                  <td>'.$field7name.'</td> 
                  <td>'.$field8name.'</td> 
                  <td>'.$field9name.'</td> 
                  <td>'.$field10name.'</td> 
                  <td>'.$field11name.'</td> 
                  <td>'.$field12name.'</td> 
                  <td><a  href="'.$field13name.'">'.$field13name.'</a></td> 
                  
                  
                  
              </tr>
              </div>';
    }

    $result->free();
} 




#For Professor

$query = "SELECT * FROM professor";
#echo "<b> <center>RECORD</center> </b> <br> <br>";
echo '
<table class="table-hover" align="center"> 
    <caption><b>Professor Records:</b></caption>
      <tr class="columns" style="background-color: #B0C4DE;" > 
          <td> <font face="Arial">First name</font> </td> 
          <td> <font face="Arial">Last name</font> </td> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">Department</font> </td> 
          <td> <font face="Arial">Title</font> </td> 
          <td> <font face="Arial">Conference</font> </td> 
          <td> <font face="Arial">Venue</font> </td> 
          <td> <font face="Arial">Stage</font> </td> 
          <td> <font face="Arial">Date</font> </td> 
          <td> <font face="Arial">ISBN</font> </td> 
          <td> <font face="Arial">P_P</font> </td> 
          <td> <font face="Arial">File name</font> </td> 
      </tr>';

if ($result = $con->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1 = $row["First_name"];
        $field2 = $row["Last_name"];
        $field3 = $row["ID"];
        $field4 = $row["Department"]; 
        $field5 = $row["Title"]; 
        $field6 = $row["Conference"]; 
        $field7= $row["Venue"]; 
        $field8 = $row["Stage"];
        $field9 = $row["DATE"];
        $field10 = $row["ISBN"];
        $field11 = $row["P_P"];
        $field12 = $row["file_name"];
        
        echo '<div class="table-responsive">
        <tr> 
                  <td>'.$field1.'</td> 
                  <td>'.$field2.'</td> 
                  <td>'.$field3.'</td> 
                  <td>'.$field4.'</td> 
                  <td>'.$field5.'</td> 
                  <td>'.$field6.'</td> 
                  <td>'.$field7.'</td> 
                  <td>'.$field8.'</td> 
                  <td>'.$field9.'</td> 
                  <td>'.$field10.'</td> 
                  <td>'.$field11.'</td>  
                  <td><a  href="'.$field12.'">'.$field12.'</a></td> 
                  
                  
                  
              </tr>
              </div>';
    }

    $result->free();
} 

?>
<br> <br>
</body>
</html>