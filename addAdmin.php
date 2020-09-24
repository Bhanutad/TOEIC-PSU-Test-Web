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
    <style>
        .container-fluid{
            padding: 30px;
            text-align: center;
            background-color: #4b8b9e;
            color:white;
        }
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
          <div class="container-fluid">
              <h1>Add new Admin</h1>
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-md-4"></div>
                  <div class="box col-md-4">
                        <form action="addAdmin2.php" method="post">
                            <br>
                            <div class="form-group">
				                <label class="control-label col-sm-4">Name:</label>
				                <div class="col-sm-10">          
					                <input type="text" name="name" required >
				                </div>
                            </div>
                            <div class="form-group">
				                <label class="control-label col-sm-4">Surname:</label>
				                <div class="col-sm-10">          
					                <input type="text" name="surname" required >
				                </div>
                            </div>
                            <div class="form-group">
				                <label class="control-label col-sm-4">Username:</label>
				                <div class="col-sm-10">          
					                <input type="text" name="username" required >
				                </div>
                            </div>
                            <div class="form-group">
				                <label class="control-label col-sm-4">Password:</label>
				                <div class="col-sm-10">          
					                <input type="password" name="password" required >
				                </div>
                            </div>
                            <div style="text-align: center;">
                                <input type="submit" class="btn btn-outline-primary btn-lg" value="Add new admin">
                            </div>
                            <br>
                        </form>
                        <br>
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