<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles-index.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    
    <title>Research Paper Utility</title>
    <link rel="shortcut icon" href="img/vcet.png" type="image/x-icon">
  
<!-- PHP to retrive all rows from database and send whole table in json format -->
<?php
  // Connect to db
  
              // $servername="localhost";
              // $username="id15234340_294047";
              // $password="@294047sem5IP";
              // $database="id15234340_294047sem5ip";
              $servername="localhost";
              $username="root";
              $password="";
              $database="php_project";

  $dblink = mysqli_connect($servername,$username,$password,$database);
  //Check connection was successful
  if ($dblink->connect_errno) {
     printf("Failed to connect to database");
     exit();
  }
  // Fetch all rows
  $result = $dblink->query("SELECT * FROM details");

  //Initialize array variable
  $dbdata = array();

  //Fetch into associative array
  while ( $row = $result->fetch_assoc())  {
	$dbdata[]=$row;
  }
?>

<!-- JS for storing data into json from databse, 'details' table -->
<script>
 details_json = <?php echo json_encode($dbdata); 
?>;

 //console.log(details_json);
 console.log('json from db');
</script>

<!-- <style>
  .heading{
    font-family: Georgia, serif;
}
  </style> -->

</head>

  <body>  
    <div class="container-fluid page-container">
      <div class="content-wrap">
      <!-- Header-->
      <header class="card-header">
        <div class="vcet rounded p-1">
        
        <a class="text-dark heading" id="home-page" href="https://vcet.edu.in/">
        <img src ="img/vcet.png" alt="logo" style="float:left;">
        <h1>Vidyavardhini's College of Engineering and Technology</h1></a>
        </div>
        <h3 class="col-sm-12 col-lg-12 col-md-12">Research paper utility page</h3>
        <br>
        <!-- Nav pills -->
        <!-- <div class="d-flex justify-content-center flex-wrap"> -->
        <div class="container">
        <ul class="nav nav-pills row" role="tablist">
          <li class="col-sm-3 nav-item">
            <a class="nav-link active border rounded border-secondary" data-toggle="pill" href="#home">Info & Verify</a>
          </li>
          <li class="col-sm-5 col-lg-4 nav-item">
            <a class="nav-link border rounded border-secondary" data-toggle="pill" href="#view">View Research Paper Details</a>
          </li>
          <li id ="professor_li" class="col-sm-3 nav-item" style="display: none;">
            <a id="prof_li" class="nav-link border rounded border-secondary" data-toggle="pill" href="#professor">Professor form</a>
          </li>
          <li id="student_li" class="col-sm-3 nav-item" style="display: none;">
            <a class="nav-link border rounded border-secondary" data-toggle="pill" href="#student">Student form</a>
          </li>
        </ul>
        </div>
      </header><!-- end header-->
      <!-- Tab panes -->
      <div class="tab-content">
        <div id="home" class="tab-pane active container"><br>
          <h3>Info</h3>
          <div class="info-button">
              <div class="info">
                <p>
                  This is the research paper view as well as entry page for the students and professors of the college "Vidyavardhini's College of Engineering and Technology"
                </p>
                <p>
                  Note: If you want to enter your research paper details on the college database, please enter your name and college ID card details below.
                </p>
                <p><h5>For Student Verification: <i>id = 12345, name = Admin Student</i></h5>
                  <h5>For Student Verification: <i>id = 9664, name = Soham Madhvani</i></h5>
                  <h5>For Student Verification: <i>id = 9833, name = Harsh Pandya</i></h5>
                  <h5>For Student Verification: <i>id = 9820, name = Rushank Sheta</i></h5><br>
                  <h5>For Professor Verification: <i>id = 12345, name = Yogesh Pingle</i></h5>
                  <h5>For Professor Verification: <i>id = 12345, name = Admin Professor</i></h5>

                </p>  
              </div>
              <br>
              <!-- <div class="info-verify">
                <input type="number" id="verify_email" class="form-control mt-2 col-sm-3" placeholder="College ID number">
                <input type="text" id="verify_fname" class="form-control mt-2 col-sm-3" placeholder="First Name"> 
                <input type="text" id="verify_lname" class="form-control mt-2 col-sm-3" placeholder="Last Name">
                <button type="button" class="btn mt-2 col-sm-1 align-content-center" onclick="verify();">Verify</button>
              </div> -->
              <!-- <div class="container-fluid"> -->
                <!-- NEW -->
                <!-- <div class="d-flex justify-content-center flex-wrap"> -->

                <!-- INFO / Verify section -->
                <form action="">
                    <div class="form-group justify-content-center">
                        <div class="d-flex col-sm-7 col-md-5 col-lg-4 col-xl-3 mb-2">
                            <input type="number" id="verify_id" class="form-control input_upper" placeholder="College ID number">
                        </div>
                        <div class="d-flex col-sm-7 col-md-5 col-lg-4 col-xl-3 mb-2">
                            <input type="text" id="verify_fname" class="form-control input_upper" placeholder="First Name"> 
                        </div>
                        <div class="d-flex col-sm-7 col-md-5 col-lg-4 col-xl-3 mb-2"> 
                            <input type="text" id="verify_lname" class="form-control input_upper" placeholder="Last Name">
                        </div>
                        <div class="d-flex col-sm-7 col-md-5 col-lg-4 col-xl-3 mt-3 justify-content-center">
                            <button type="submit" id="verify_button" class="btn bg-secondary col-sm-4" onclick="save_into_cookie();"><b>Verify</b></button>
                            <button type="reset" id="reset_button" class="btn bg-secondary ml-2 col-sm-4" onclick="reset_cookie();"><b>Reset</b></button>
                        </div>
                        <br>
                        <div class="d-flex col-sm-7 col-md-5 col-lg-4 col-xl-3 mb-2 justify-content-center" id="verify_status_block">
                        </div>
                    </div>
                </form>
              <!-- </div> -->
          </div>
        </div>

        <!-- VIEW section -->
        <div id="view" class="tab-pane fade container"><br>
        <!-- SOHAM -->
          <br><br>
         
            <div class="d-flex justify-content-left">
                <div>
                    <a href="php/view_s.php" target="_blank" type="button" class="bg-dark text-light p-4 mt-3 mr-5 rounded" style="text-decoration:none;"><span class="mr-4"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                      <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                      </svg></span><b>Research Papers by Students</b></a>
                </div>
                <div>
                    <a href="php/view_p.php" target="_blank" type="button" class="bg-dark text-light p-4 mt-3 ml-5 rounded" style="text-decoration:none;"><span class="mr-4"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                        </svg></span><b>Research Papers by Professors</b></a>
                </div>
            
          </div>
          
        </div>

        <!-- PROFESSOR Form-->
        <div id="professor" class="tab-pane fade container"><br>
          <h3>Professor Form</h3><br>
          <form action="php/prof_insert.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-group row">
            <label class="control-label col-sm-3" for="fname">First name :</label>
              <div class="col-sm-6 col-md-5 col-lg-4">
                <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" required>
              </div>
            </div>
            <div class="form-group row">
            <label class="control-label col-sm-3" for="lname">Last name :</label>
              <div class="col-sm-6 col-md-5 col-lg-4">
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" required>
              </div>
            </div>
            <div class="form-group row">
            <label class="control-label col-sm-3" for="id">College ID number :</label>
              <div class="col-sm-6 col-md-5 col-lg-4">
                <input type="number" class="form-control" id="id" name="id" placeholder="College id number" required>
              </div>
            </div>
          <!-- <div class="form-group row">
            <label class="control-label col-sm-3" for="year">Year :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <select class="form-control" id="year" name="year" placeholder="Year" required>
                <option>
                  First Year Engineering (B.E)
              </option>
              <option>
                  Second Year Engineering (S.E)
              </option>
              <option>
                  Third Year Engineering (T.E)
              </option>
              <option>
                  Final Year Engineering (B.E)
              </option>
            </select>
            </div>
          </div> -->
          <div class="form-group row">
            <label class="control-label col-sm-3" for="dept">Department :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <select class="form-control" id="dept" name="dept" placeholder="Department" required>
                <option> 
                  Mechanical Engineering
                </option>
                <option>
                  Electronics and Telecommunications Engineering
                </option>
                <option>
                  Instrumentation Engineering    
                </option>
                <option>
                  Computer Engineering
                </option>
                <option>
                  Information Technology
                </option>
                <option>
                  Civil Engineering
                </option>
            </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="title">Title of the Paper :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="conf">Conference name :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <input type="text" class="form-control" id="conf" name="conf" placeholder="Conference name" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="venue">Venue :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <input type="text" class="form-control" id="venue" name="venue" placeholder="Venue" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="stage">Level :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <select class="form-control" id="stage" name="stage" placeholder="Level" required>
                <option>
                    National
                </option>
                <option>
                    International
                </option>
            </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="academic_year">Academic Year :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <select class="form-control" id="academic_year" name="academic_year" placeholder="Academic year" required>
                <option>
                    2018-2019
                </option>
                <option>
                    2019-2020
                </option>
                <option>
                    2020-2021
                </option>
                <option>
                  2021-2022
                </option>
                <option>
                  2022-2023
                </option>
                <option>
                  2023-2024
                </option>
                <option>
                  2024-2025
                </option>
                <option>
                  2025-2026
                </option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="date">Date (optional) :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <input type="date" class="form-control" id="date" name="Date" placeholder="Date" >
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="isbn">ISBN / ISSN :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN / ISSN" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="page_start">Start page number :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <input type="number" class="form-control" id="page_start" name="page_start" placeholder="Start page" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="page_end">End page number :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <input type="number" class="form-control" id="page_end" name="page_end" placeholder="End page" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="link">Upload link :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <input type="url" class="form-control" id="link" name="link" placeholder="url">
              <!-- accept="pdf/*"> -->
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="myfile">Upload pdf file:</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <input type="file" class="form-control" id="myfile" name="file" accept="pdf/*">
            </div>
          </div>
          <div class="form-group row">
          <!--        
            <div class="col-sm-offset-2 col-sm-1">
                <button type="button" id="preview_bt" class="btn btn-default">Preview</button>
            </div>
          !-->
            <div class="col-sm-6 col-md-5 col-lg-4 offset-sm-3">
              <label><input type="checkbox" name="remember" class="checkbox" required> I confirm my submission</label>
            </div> 
          </div>
          <div class="form-group row">        
            <div class="col-sm-6 col-md-5 col-lg-4 offset-sm-3">
                <button type="submit" id="submit_bt" class="btn btn-primary" onclick="reset_cookie();"><b>Submit</b></button>
            </div>
          </div>
          </form>
        </div>

        <!-- STUDENT From-->
        <div id="student" class="tab-pane fade container"><br>
          <h3>Student Form</h3><br>
          <form action="php/stud_insert.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-group row">
            <label class="control-label col-sm-3" for="fname">First name :</label>
              <div class="col-sm-6 col-md-5 col-lg-4">
                <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" required>
              </div>
            </div>
            <div class="form-group row">
            <label class="control-label col-sm-3" for="lname">Last name :</label>
              <div class="col-sm-6 col-md-5 col-lg-4">
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" required>
              </div>
            </div>
            <div class="form-group row">
            <label class="control-label col-sm-3" for="id">College ID number :</label>
              <div class="col-sm-6 col-md-5 col-lg-4">
                <input type="number" class="form-control" id="id" name="id" placeholder="College id number" required>
              </div>
            </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="year">Year :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <select class="form-control" id="year" name="year" placeholder="Year" required>
                <option>
                  First Year Engineering (B.E)
              </option>
              <option>
                  Second Year Engineering (S.E)
              </option>
              <option>
                  Third Year Engineering (T.E)
              </option>
              <option>
                  Final Year Engineering (B.E)
              </option>
            </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="dept">Department :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <select class="form-control" id="dept" name="dept" placeholder="Department" required>
                <option> 
                  Mechanical Engineering
                </option>
                <option>
                  Electronics and Telecommunications Engineering
                </option>
                <option>
                  Instrumentation Engineering    
                </option>
                <option>
                  Computer Engineering
                </option>
                <option>
                  Information Technology
                </option>
                <option>
                  Civil Engineering
                </option>
            </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="title">Title of the Paper :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="conf">Conference name :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <input type="text" class="form-control" id="conf" name="conf" placeholder="Conference name" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="venue">Venue :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <input type="text" class="form-control" id="venue" name="venue" placeholder="Venue" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="stage">Level :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <select class="form-control" id="stage" name="stage" placeholder="Level" required>
                <option>
                    National
                </option>
                <option>
                    International
                </option>
            </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="academic_year">Academic Year :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <select class="form-control" id="academic_year" name="academic_year" placeholder="Academic year" required>
                <option>
                    2018-2019
                </option>
                <option>
                    2019-2020
                </option>
                <option>
                    2020-2021
                </option>
                <option>
                  2021-2022
                </option>
                <option>
                  2022-2023
                </option>
                <option>
                  2023-2024
                </option>
                <option>
                  2024-2025
                </option>
                <option>
                  2025-2026
                </option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="date">Date (optional) :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <input type="date" class="form-control" id="date" name="Date" placeholder="Date" >
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="isbn">ISBN / ISSN :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN / ISSN" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="page_start">Start page number :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <input type="number" class="form-control" id="page_start" name="page_start" placeholder="Start page" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="page_end">End page number :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <input type="number" class="form-control" id="page_end" name="page_end" placeholder="End page" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="link">Upload link :</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <input type="url" class="form-control" id="link" name="link" placeholder="url">
              <!-- accept="pdf/*"> -->
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-3" for="myfile">Upload pdf file:</label>
            <div class="col-sm-6 col-md-5 col-lg-4">
              <input type="file" class="form-control" id="myfile" name="file" accept="pdf/*">
            </div>
          </div>
          <div class="form-group row">
          <!--        
            <div class="col-sm-offset-2 col-sm-1">
                <button type="button" id="preview_bt" class="btn btn-default">Preview</button>
            </div>
          !-->
            <div class="col-sm-6 col-md-5 col-lg-4 offset-sm-3">
              <label><input type="checkbox" name="remember" class="checkbox" required> I confirm my submission</label>
            </div> 
          </div>
          <div class="form-group row">        
            <div class="col-sm-6 col-md-5 col-lg-4 offset-sm-3">
                <button type="submit" id="submit_bt_stu" class="btn btn-primary" onclick="reset_cookie();"><b>Submit</b></button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
</div>


<!-- To hide the student form and professor form nav buttons before js is executed, then cookies are verified and changed as per cookied present -->
  <script>document.getElementById('student_li').style.display="none";
        document.getElementById('professor_li').style.display="none";
        
</script>
<script src="js/script-index.js"></script>
  </body>
</html>