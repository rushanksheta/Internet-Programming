<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>View Records</title>

    <style>
    
    
    td{
        text-align:center;
        border: 1px solid black;
        }
    </style>
  </head>
  <body>
  <div>
  <h4>Student Details:</h4>
      </div>
  <div>
  <?php
              $servername="localhost";
              $username="root";
              $password="";
              $con = mysqli_connect($servername,$username,$password,"php_project");
              
              $query = "SELECT * FROM student";
              echo '<div class=" container-fluid mt-3">
              <table id="student" class="table-hover" align="center"> 
                    <tr class="columns" style="background-color: rgb(180, 180, 180,0.5);" > 
                        <td> <font face="Arial">First name</font> </td> 
                        <td> <font face="Arial">Last name</font> </td>
                        <td> <font face="Arial">College ID number </font> </td> 
                        <td> <font face="Arial">Year</font> </td> 
                        <td> <font face="Arial">Department</font> </td> 
                        <td> <font face="Arial">Title</font> </td> 
                        <td> <font face="Arial">Conference</font> </td> 
                        <td> <font face="Arial">Venue</font> </td> 
                        <td> <font face="Arial">Stage</font> </td> 
                        <td> <font face="Arial">Academic Year</font> </td> 
                        <td> <font face="Arial">Date</font> </td> 
                        <td> <font face="Arial">ISBN</font> </td> 
                        <td> <font face="Arial">Start page number</font> </td>
                        <td> <font face="Arial">End page number</font> </td>  
                        <td> <font face="Arial">URL</font> </td> 
                        <td> <font face="Arial">File</font> </td> 
                    </tr>';

              if ($result = $con->query($query)) {
                while ($row = $result->fetch_assoc()) {
                      $field1 = $row["First_name"];
                      $field2 = $row["Last_name"];
                      $field3 = $row["College_ID_number"];
                      $field4 = $row["Year"];
                      $field5 = $row["Department"]; 
                      $field6 = $row["Title"]; 
                      $field7 = $row["Conference"]; 
                      $field8= $row["Venue"]; 
                      $field9 = $row["Stage"];
                      $field10 = $row["Academic_Year"];
                      $field11 = $row["DATE"];
                      $field12 = $row["ISBN"];
                      $field13 = $row["Start_page_number"];
                      $field14 = $row["End_page_number"];
                      $field15 = $row["Link"];
                      $field16 = $row["file_name"];
                      
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
                                <td>'.$field12.'</td>
                                <td>'.$field13.'</td>
                                <td>'.$field14.'</td>
                                <td><a  href="'.$field15.'">'.$field15.'</a></td> 
                                <td><a  href="'.$field16.'">'.$field16.'</a></td> 
                            </tr>
                            </div>
                            </div>';
                  }
                  $result->free();
                }
                ?>
                </div>
              <div><h4>Professor Details:</h4></div>
                <div>
                <?php
                $query = "SELECT * FROM professor";
              echo '<div class="container-fluid mb-3">
              <table id="profesor" class="table-hover" align="center"> 
                    <tr class="columns" style="background-color: rgb(180, 180, 180,0.5);" > 
                        <td> <font face="Arial">First name</font> </td> 
                        <td> <font face="Arial">Last name</font> </td>
                        <td> <font face="Arial">College ID number </font> </td>  
                        <td> <font face="Arial">Department</font> </td> 
                        <td> <font face="Arial">Title</font> </td> 
                        <td> <font face="Arial">Conference</font> </td> 
                        <td> <font face="Arial">Venue</font> </td> 
                        <td> <font face="Arial">Stage</font> </td> 
                        <td> <font face="Arial">Academic Year</font> </td> 
                        <td> <font face="Arial">Date</font> </td> 
                        <td> <font face="Arial">ISBN</font> </td> 
                        <td> <font face="Arial">Start page number</font> </td>
                        <td> <font face="Arial">End page number</font> </td>  
                        <td> <font face="Arial">URL</font> </td> 
                        <td> <font face="Arial">File</font> </td> 
                    </tr>';

              if ($result = $con->query($query)) {
                while ($row = $result->fetch_assoc()) {
                      $field1 = $row["First_name"];
                      $field2 = $row["Last_name"];
                      $field3 = $row["College_ID_number"];
                      $field5 = $row["Department"]; 
                      $field6 = $row["Title"]; 
                      $field7 = $row["Conference"]; 
                      $field8= $row["Venue"]; 
                      $field9 = $row["Stage"];
                      $field10 = $row["Academic_Year"];
                      $field11 = $row["DATE"];
                      $field12 = $row["ISBN"];
                      $field13 = $row["Start_page_number"];
                      $field14 = $row["End_page_number"];
                      $field15 = $row["Link"];
                      $field16 = $row["file_name"];
                      
                      echo '<div class="table-responsive">
                      <tr> 
                                <td>'.$field1.'</td> 
                                <td>'.$field2.'</td> 
                                <td>'.$field3.'</td> 
                                <td>'.$field5.'</td> 
                                <td>'.$field6.'</td> 
                                <td>'.$field7.'</td> 
                                <td>'.$field8.'</td> 
                                <td>'.$field9.'</td> 
                                <td>'.$field10.'</td> 
                                <td>'.$field11.'</td>
                                <td>'.$field12.'</td>
                                <td>'.$field13.'</td>
                                <td>'.$field14.'</td>
                                <td><a  href="'.$field15.'">'.$field15.'</a></td> 
                                <td><a  href="'.$field16.'">'.$field16.'</a></td> 
                            </tr>
                            </div>
                            </div>';
                  }
                  $result->free();
                }
                ?>
              <div>
  </body>
</html>