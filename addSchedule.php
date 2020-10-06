<?php
include 'header.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>TOEIC PSU Phuket Test Online System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .box{
          margin-top: 10px;
          margin-bottom: 10px;
            border: 5px solid black;
            text-align: left;
        }
    </style>
  </head>
  <body>
  <div>
        <div>
          <h1 class="display-2">Add new Schedule</h1>
        </div>
          <div class="container">
            <div class="row">
              <div class="col-md-4"></div>
              <div class="box col-md-4">
              <form action="addSchedule2.php" method="post">
                  <br>
              <div class="form-group">
				  <label class="control-label col-sm-4">Exam date:</label>
				  <div class="col-sm-10">          
					<input type="date" name="examDate" value="YYYY-MM-DD" min="2020-01-01" max="3000-31-12" required>
				  </div>
                </div>
                <div class="form-group">
				  <label class="control-label col-sm-4">Time:</label>
				  <div class="col-sm-10">          
                  <input type="time" name="timeExam" required>
          </div>
                </div>
                <div class="form-group">
				  <label class="control-label col-sm-4">To:</label>
				  <div class="col-sm-10">          
                  <input type="time" name="totime" required>
				  </div>
                </div>
                <div class="form-group">
				  <label class="control-label col-sm-8">Start registeration date:</label>
				  <div class="col-sm-10">          
					<input type="date" name="startDate" value="YYYY-MM-DD" min="2020-01-01" max="3000-31-12" required>
				  </div>
                </div>
                <div class="form-group">
				  <label class="control-label col-sm-8">End registeration date:</label>
				  <div class="col-sm-10">          
					<input type="date" name="endDate" value="YYYY-MM-DD" min="2020-01-01" max="3000-31-12" required>
				  </div>
                </div>
                <div class="form-group">
				  <label class="control-label col-sm-8">Getting result:</label>
				  <div class="col-sm-10">          
					<input type="date" name="getDate" value="YYYY-MM-DD" min="2020-01-01" max="3000-31-12" required>
				  </div>
                </div>
                <div class="form-group">
				  <label class="control-label col-sm-8">Applicant type:</label>
				  <div class="col-sm-10">          
                <input type="checkbox" name="applicantS" value="Student">&nbsp;Student <br>
                <input type="checkbox" name="applicantG" value="General">&nbsp;General
				  </div>
                </div>
                <div class="form-group">
				  <label class="control-label col-sm-4">Faculty:</label>
				  <div class="col-sm-10"> 
                <input type="checkbox" name="coc" value="College of Computing">&nbsp;College of Computing<br>
                <input type="checkbox" name="fht" value="Hospitality and Tourism">&nbsp;Hospitality and Tourism <br>
                <input type="checkbox" name="fis" value="International Studies">&nbsp;International Studies<br>
                <input type="checkbox" name="fte" value="Technology and Evironment">&nbsp;Technology and Evironment
				  </div>
                </div>
                <div class="form-group">
				  <label class="control-label col-sm-4">Note:</label>
				  <div class="col-sm-10">          
                  <input type="text" name="note" placeholder="About student ID" required>
				  </div>
                </div>
                <div style="text-align: center;">
                <input type="submit" class="btn btn-outline-primary btn-lg " value="Add new schedule">
                </div>
                <br>
              </form>
              </div>
              <div class="col-md-4"></div>
            </div>
          </div>  
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>