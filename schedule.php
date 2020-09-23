<?php
include 'header.php';
session_start();
	if($_SESSION['adminID'] == "")
	{
		echo "
		<script>
		alert('Please Login!');
		window.location = 'index.php';
		</script>";
		exit();
	}
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
       .head{
        background-color: #4b8b9e;
        color: white;
      }
      table {
        width: 1120px; 
        font-size: 30px;
        border: 3px solid black;
        border-collapse: collapse;
        text-align: left;
      }
      th, td {
        border: 2px solid black;
        border-collapse: collapse;
        width: 140px;
        padding: 5px;
        text-align: left;
        font-size: 20px;
      }
    </style>
  </head>
  <body>
  <div>
    <div>
      <h1 class="display-1">SCHEDULE</h1>
    </div>
    <div class="container">
	      <div class="row">
		      <div class="col-md-4"></div>
		      <div class="col-md-4">
		        <div style="text-align: center" >
	        	  <a href="addSchedule.php">
		          <button class="btn btn-primary btn-lg">Add new schedule</button>
		          </a>
		        </div>
		      </div>
		      <div class="col-md-4"></div>
	      </div>
    </div>
    <div class="container">
            <div class="row">
              <div class="col-md-0"></div>
              <div class="col-md-12">
              <?php
include  'config.php';

$sqladmin = 'SELECT * FROM schedule   ORDER BY scheduleID';
$resultadmin = mysqli_query($connect,$sqladmin);
echo '<br>';
echo '<table>';
echo '<tr class="head"><td>';
echo "Exam Date";
echo '</td><td>';
echo "Time Exam";
echo '</td><td>';
echo "Start Date";
echo '</td><td>';
echo "End Date";
echo '</td><td>';
echo 'Getting Result';
echo '</td><td>';
echo "Time";
echo '</td><td>';
echo "Applicant";
echo '</td><td>';
echo "Faculty";
echo '</td><td>';
echo "Note";
echo '</td></tr>';
while($row= mysqli_fetch_array( $resultadmin, MYSQLI_ASSOC)){
echo '<tr>';
echo '</tr><td>';
echo "$row[examDate]".'<br>';
echo '</td><td>';
echo "$row[timeExam]".'<br>';
echo '</td><td>';
echo "$row[startDate]".'<br>';
echo '</td><td>';
echo "$row[endDate]".'<br>';
echo '</td><td>';
echo "$row[getDate]".'<br>';
echo '</td><td>';
echo "$row[timeGet]".'<br>';
echo '</td><td>';
echo "$row[applicantS]"."$row[applicantG]".'<br>';
echo '</td><td>';
echo "$row[faculty]".'<br>';
echo '</td><td>';
echo "$row[note]".'<br>';
echo '</td></tr>';}
echo '</table>';
echo '<br><br>';
?>
              </div>
              <div class="col-md-0"></div>
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