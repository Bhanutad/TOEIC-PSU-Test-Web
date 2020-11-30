<?php
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
        border: 1px solid gray;
        border-collapse: collapse;
        text-align: left;
      }
      th{
        border-collapse: collapse;
        width: 140px;
        padding: 5px;
        text-align: left;
        font-size: 15px;
      }
      td{
        border: 1px solid gray;
        font-size: 10px;
      }
    </style>
  </head>
  <body>
      <div>
      <div>
             <h1 class="display-1">Exam application history</h1>
          </div>
    <div class="container">
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">
                <table class="table datatable">
                  <thead class="head">
                    <tr>
                      <th>Examination Date</th>
                      <th>Applicant type</th>
                      <th>ID card/Passport No.</th>
                      <th>Firstname</th>
                      <th>Lastname</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    include  'config.php';
                    $idCard = $_POST['idCard'];
                    $sqlexam = "SELECT * FROM exam WHERE idCard = '$idCard' and statusShow = 1";
                    $resultexam = mysqli_query($connect,$sqlexam );                    
                  
                    while($row= mysqli_fetch_array($resultexam) ){ 
                ?>
                    <tr>
                      <td> <?php echo "$row[examDate]" ?></td>
                      <td> <?php echo "$row[applicant]" ?></td>
                      <td> <?php echo "$row[idCard]"?></td>
                      <td> <?php echo "$row[name]" ?></td>
                      <td> <?php echo "$row[lastname]" ?></td>
                      </tr>
                <?php 
                    } 
                
                ?>
              </div>
              <div class="col-md-1"></div>
          </div>
      </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
        $('.datatable').datatable();  
      });
    </script>
  </body>
</html>