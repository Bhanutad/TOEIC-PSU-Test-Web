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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
    <style>
        .box{
          margin-top: 10px;
          margin-bottom: 10px;
            border: 5px solid black;
            text-align: left;
        }
      body.modal-open .modal {
      margin-top: 60px;
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
            <div class="col-md-2"></div>
            <div class="box col-md-8">
			<br>
                  <tbody>
                    <?php
                    include  'config.php';

                    $sqlterm = 'SELECT * FROM term ';
                    $resultterm = mysqli_query($connect,$sqlterm);
                    while($row= mysqli_fetch_array( $resultterm, MYSQLI_ASSOC)){
                    ?>
                    <tr>
					              <td> <?php echo "$row[text]" ?></td>
                        <br>
                    </tr>
                  </tbody>
                <div style="text-align: center;">
                        <a href="#" class="edit-term btn btn-info btn-lg"
                        data-termID="<?php echo $row['termID']?>"
                      data-text="<?php echo $row['text']?>">Edit 
                        </a>
                </div>
                    <?php
                    }
                    ?>
              </div>
          <div class="col-md-2"></div>
        </div>
	</div>
</div>
	<!-- Modal -->
<div class="modal fade" id="formEditTerm">
            <div class="modal-dialog">
                <div class="modal-content">
                <form action="updateTerm.php" method="post" >
                  <div class="modal-header">
                  </div>
                  <div class="modal-body">
                  <div class="form-group">
				                <label class="control-label col-sm-4">Term ID:</label>
				                <div class="col-sm-10">          
					                <input type="text" name="termID" id="termID" readonly>
				                </div>
                            <div class="form-group">
				                <label class="control-label col-sm-4">Term and Condition:</label>
				                <div class="col-sm-10">  
									<textarea name="text" id="text" cols="50" rows="10" required ></textarea>       
				                </div>
                            </div>
                </div>
                </div>
                  <div class="modal-footer">
                  <div style="text-align: center;">
                  <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-success btn-lg " value="Save">
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
         var termID= $ (this).attr('data-termID');
         var text= $ (this).attr('data-text');
       // // set value to modal
         $('#termID').val(termID);
         $('#text').val(text);
         
       $('#formEditTerm').modal('show');
     });
    </script>
  </body>
</html>