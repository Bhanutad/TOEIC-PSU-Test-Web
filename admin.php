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
      /* body.modal-open .modal {
    display: flex !important;
    height: 100%;
} 

body.modal-open .modal .modal-dialog {
    margin: auto;
} */
      </style>
  </head>
  <body>
      <div>
          <div>
             <h1 class="display-2">Admin management</h1>
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
          <br>
    <div class="container">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <table class="table datatable">
                  <thead class="head">
                    <tr>
                      <th>Name</th>
                      <th>Surname</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include  'config.php';

                    $sqladmin = 'SELECT * FROM manage_admin   ORDER BY adminID';
                    $resultadmin = mysqli_query($connect,$sqladmin);
                    while($row= mysqli_fetch_array( $resultadmin, MYSQLI_ASSOC)){
                    ?>
                    <tr>
                      <td> <?php echo "$row[name]" ?></td>
                      <td> <?php echo "$row[surname]"?></td>
                      <td> <?php echo "$row[username]"?></td>
                      <td> <?php echo "$row[password]"?></td>
                      <td>
                        <div >

                    
                        <a href="#" class="edit-admin btn btn-info btn-lg"
                      data-name="<?php echo $row['name']?>"
                      data-surname="<?php echo $row['surname']?>"
                      data-username="<?php echo $row['username']?>"
                      data-password="<?php echo $row['password']?>">Edit
                          </a>
                        </div>
                        <br>
                        <div>
                        <a href="">
                      <button type="button" name="button" class="btn btn-danger btn-lg">Delete</button>
                          </a>
                          </div>
                      </td>
                    </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <div class="col-md-3"></div> 
            </div>
          </div> 
      </div>
      <!-- Modal -->
      <div class="modal fade" id="formEditAdmin">
            <div class="modal-dialog">
              <form action="updateAdmin.php" method="post" >
                <div class="modal-content">
                  <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismis="modal" name="button">
                    <span aria-hidden="true">&times;</span>
                    </button> -->
                  </div>
                  <div class="modal-body">
                            <div class="form-group">
				                <label class="control-label col-sm-4">Name:</label>
				                <div class="col-sm-10">          
					                <input type="text" name="name" id="name" required >
				                </div>
                            </div>
                            <div class="form-group">
				                <label class="control-label col-sm-4">Surname:</label>
				                <div class="col-sm-10">          
					                <input type="text" name="surname" id="surname" required >
				                </div>
                            </div>
                            <div class="form-group">
				                <label class="control-label col-sm-4">Username:</label>
				                <div class="col-sm-10">          
					                <input type="text" name="username" id="username" required >
				                </div>
                            </div>
                            <div class="form-group">
				                <label class="control-label col-sm-4">Password:</label>
				                <div class="col-sm-10">          
					                <input type="password" name="password" id="password" required >
				                </div>
                            </div>
                </div>
                  <div class="modal-footer">
                  <div style="text-align: center;">
                <input type="submit" class="btn btn-success btn-lg " value="Save">
                </div>
                  </div>
                </div>
              </form>
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
      $('.edit-admin').click(function(){
       
          // // get data from edit btn
            var name= $ (this).attr('data-name');
            var surname= $ (this).attr('data-surname');
            var username= $ (this).attr('data-username');
            var password = $(this).attr('data-password');
          // // set value to modal
            $('#name').val(name);
            $('#surname').val(surname);
            $('#username').val(username);
            $('#password').val(password);
            
          $('#formEditAdmin').modal('show');
        });
     
    </script>
  </body>
</html>