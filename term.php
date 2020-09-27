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
      table {
        width: 1120px; 
        border: 3px solid gray;
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
              <h1 class="display-2">Term and Conditions</h1>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <br>
                <table class="table">
                  <br>
                  <tbody>
                    <?php
                    include  'config.php';

                    $sqladmin = 'SELECT * FROM term';
                    $resultadmin = mysqli_query($connect,$sqladmin);
                    while($row= mysqli_fetch_array( $resultadmin, MYSQLI_ASSOC)){
                    ?>
                    <tr>
                      <td> <?php echo "$row[term]" ?></td>
                      <td>
                        <div >

                        <!-- echo "<a href='#' >$row[file]</a> ".'<br>';  -->
                        <a href="#" class="edit-term btn btn-info btn-lg"
                      data-term="<?php echo $row['term']?>">Edit 
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
<div class="modal fade" id="formEditTerm">
            <div class="modal-dialog">
              <form action=".php" method="post" >
                <div class="modal-content">
                  <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismis="modal" name="button">
                    <span aria-hidden="true">&times;</span>
                    </button> -->
                  </div>
                  <div class="modal-body">
                            </div>
                            <div class="form-group">
				                <label class="control-label col-sm-4">News:</label>
				                <div class="col-sm-10">          
					                <textarea name="text" id="term" cols="30" rows="10"></textarea>
				                </div>
                </div>
                  <div class="modal-footer">
                  <div style="text-align: center;">
                  <input type="submit" class="btn btn-primary btn-lg " value="Cancel">
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
      $('.edit-term').click(function(){
       
       // // get data from edit btn
         var term= $ (this).attr('data-term');
       // // set value to modal
         $('#term').val(term);
         
       $('#formEditTerm').modal('show');
     });
  
    </script>
  </body>
</html>