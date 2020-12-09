<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Student Records</title>
    <link rel="shortcut icon" href="../img/vcet.png" type="image/x-icon">

    <style>
    table{
        width: 100%;
    }
    td{
        text-align:center;
        border: 1px solid black;
        }
    th{
      border: 1px solid black;
    }
    </style>
  </head>
  <body>
  <div>
  <h3 class="text-center mb-3"><u>Student Details</u></h3>
      </div>
  <div>
  <?php
              // $servername="localhost";
              // $username="id15234340_294047";
              // $password="@294047sem5IP";
              // $database="id15234340_294047sem5ip";
              $servername="localhost";
              $username="root";
              $password="";
              $database="php_project";
              $con = mysqli_connect($servername,$username,$password,"$database");
              
              $query = "SELECT * FROM student";
              $query = "SELECT * FROM student";
              echo '<div class=" container-fluid mt-3">
              <table id="student" class="table-hover" align="center"> 
                    <tr class="columns" style="border: 1px solid black;background-color:#f2f2f2;"> 
                        <th class="text-center px-1 py-2"> <font face="Arial">First Name</font> </th> 
                        <th class="text-center px-1 py-2"> <font face="Arial">Last Name</font> </th>
                        <th class="text-center px-1 py-2"> <font face="Arial">College ID number </font> </th> 
                        <th class="text-center px-5 py-2"> <font face="Arial">Year</font> </th> 
                        <th class="text-center px-5 py-2"> <font face="Arial">Department</font> </th> 
                        <th class="text-center py-2"> <font face="Arial">Title</font> </th> 
                        <th class="text-center px-1 py-2"> <font face="Arial">Conference</font> </th> 
                        <th class="text-center px-3 py-2"> <font face="Arial">Venue</font> </th> 
                        <th class="text-center px-3 py-2"> <font face="Arial">Stage</font> </th> 
                        <th class="text-center py-2"> <font face="Arial">Academic Year</font> </th> 
                        <th class="text-center px-1 py-2"> <font face="Arial">Date</font> </th> 
                        <th class="text-center px-3 py-2"> <font face="Arial">ISBN</font> </th> 
                        <th class="text-center px-1 py-2"> <font face="Arial">Start Pg</font> </th>
                        <th class="text-center px-1 py-2"> <font face="Arial">End Pg</font> </th>  
                        <th class="text-center px-4 py-2" style="width:10px;"> <font face="Arial">URL</font> </th> 
                        <th class="text-center px-4 py-2"> <font face="Arial">File</font> </th> 
                    
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
                                <td class="py-2"><a  href="'.$field15.'" title="Go to URL"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-up-right-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path fill-rule="evenodd" d="M5.172 10.828a.5.5 0 0 0 .707 0l4.096-4.096V9.5a.5.5 0 1 0 1 0V5.525a.5.5 0 0 0-.5-.5H6.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"/>
                              </svg></a></td> 
                                <td class="py-2"><a  href="'.$field16.'" title="Open File"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-file-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z"/>
                                <path fill-rule="evenodd" d="M4.5 10.5A.5.5 0 0 1 5 10h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
                              </svg></a></td> 
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