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
      body.modal-open .modal {
      margin-top: 60px;
} 
      </style>
  </head>
  <body>
      <div>
          <div>
             <h1 class="display-2">Applicant Setting</h1>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4">
                <div style="text-align: center" >
	        	      <a href="addApp.php">
		              <button class="btn btn-primary btn-lg">Add new applicant type</button>
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
                      <th>Applicant type</th>
                      <th>Price</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include  'config.php';

                    $sqlapplicant = 'SELECT * FROM applicant ';
                    $resultapplicant = mysqli_query($connect,$sqlapplicant);
                    while($row= mysqli_fetch_array( $resultapplicant, MYSQLI_ASSOC)){
                    ?>
                    <tr>
                      <td> <?php echo "$row[type]" ?></td>
                      <td> <?php echo "$row[price]"?></td>
                      <td>
                        <div >

                    
                        <a href="#" class="edit-app btn btn-warning btn-lg"
                      data-appID="<?php echo $row['appID']?>"
                      data-type="<?php echo $row['type']?>"
                      data-price="<?php echo $row['price']?>">Edit
                          </a>
                          &nbsp;&nbsp;&nbsp;
                          <?php
                          echo "<a href='deleteApp.php?appID=$row[appID]'class='btn btn-danger btn-lg' 
                          onclick=\"return confirm('Are you sure to delete this record? !!!')\">
                          delete
                          </a>";?>
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
      <div class="modal fade" id="formEditApp">
            <div class="modal-dialog">
              <form action="updateApp.php" method="post" >
                <div class="modal-content">
                  <div class="modal-header">
                  </div>
                  <div class="modal-body">
                  <div class="form-group">
				                <label class="control-label col-sm-4">Applicant ID:</label>
				                <div class="col-sm-10">          
					                <input type="text" name="appID" id="appID" readonly>
                        </div>
                  </div>
                            <div class="form-group">
				                <label class="control-label col-sm-4">Applicant Type:</label>
				                <div class="col-sm-10">          
					                <input type="text" name="type" id="type" required >
				                </div>
                            </div>
                            <div class="form-group">
				                <label class="control-label col-sm-4">Price:</label>
				                <div class="col-sm-10">          
					                <input type="text" name="price" id="price" required >
				                </div>
                            </div>
                </div>
                  <div class="modal-footer">
                  <div style="text-align: center;">
                <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Cancel</button>
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
      $('.edit-app').click(function(){
       
          // // get data from edit btn
            var appID= $ (this).attr('data-appID');
            var type= $ (this).attr('data-type');
            var price= $ (this).attr('data-price');
          // // set value to modal
            $('#appID').val(appID);
            $('#type').val(type);
            $('#price').val(price);
            
          $('#formEditApp').modal('show');
        });
     
    </script>
  </body>
</html>