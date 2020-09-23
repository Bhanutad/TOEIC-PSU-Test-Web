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
        width: 532px; 
        font-size: 30px;
        border: 3px solid black;
        border-collapse: collapse;
        text-align: left;
      }
      th, td {
        border: 2px solid black;
        border-collapse: collapse;
        width: 133px;
        padding: 5px;
        text-align: left;
        font-size: 20px;
      }
      .modal-content{
        border:1px solid green;
display: table;
margin: 0 auto;
width: 300px;
      }
      body.modal-open .modal {
    display: flex !important;
    height: 100%;
} 

body.modal-open .modal .modal-dialog {
    margin: auto;
}
      </style>
  </head>
  <body>
      <div>
          <div>
             <h1 class="display-1">Admin management</h1>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4">
                <div style="text-align: center" >
	        	      <a href="addAdmin.php">
		              <button class="btn btn-primary btn-lg">Add new admin</button>
		              </a>
		            </div>
              </div>
              <div class="col-md-4"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
              <?php
include  'config.php';

$sqladmin = 'SELECT * FROM manage_admin   ORDER BY adminID';
$resultadmin = mysqli_query($connect,$sqladmin);
echo '<br>';
echo '<table>';
echo '<tr class="head"><td>';
echo "Name";
echo '</td><td>';
echo "Surname";
echo '</td><td>';
echo "Username";
echo '</td><td>';
echo "Password";
echo '</td><td>';
echo 'Edit';
echo '</td></tr>';
while($row= mysqli_fetch_array( $resultadmin, MYSQLI_ASSOC)){
echo '<tr>';
echo '</tr><td>';
echo "$row[name]".'<br>';
echo '</td><td>';
echo "$row[surname]".'<br>';
echo '</td><td>';
echo "$row[username]".'<br>';
echo '</td><td>';
echo "$row[password]".'<br>';
echo '</td><td>';
echo '<a  href="updateAdmin.php?adminID='.$row['adminID'].'&name='.$row['name'].'&surname='.$row['surname'].'&username='.$row['username'].'&password='.$row['password'].'" >Edit </a>';
echo "<button data-toggle='modal' data-target='#myModal'>Edit</button> "; 
echo '</td></tr>';}
echo '</table>';
?>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
           <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title" style="text-align: left;">UPDATE</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <?php
          include 'updateAdmin.php';
          ?>
        </div>
      </div>
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