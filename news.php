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
             <h1 class="display-2">NEWS</h1>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4">
                <div style="text-align: center" >
	        	      <a href="addNews.php">
		              <button class="btn btn-primary btn-lg">Add news</button>
		              </a>
		            </div>
              </div>
              <div class="col-md-4"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <br>
                <table class="table datatable">
                  <thead class="head">
                    <tr>
                      <th>Date time</th>
                      <th>News</th>
                      <th>File</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include  'config.php';

                    $sqlnews = 'SELECT * FROM news   ORDER BY newsID';
                    $resultnews = mysqli_query($connect,$sqlnews);
                    while($row= mysqli_fetch_array( $resultnews, MYSQLI_ASSOC)){
                    ?>
                    <tr>
                      <td> <?php echo "$row[date]" ?></td>
                      <td> <?php echo "$row[head]" ?></td>
                      <td> <?php echo "<a target='_blank' href='view.php?id=".$row['newsID']."'>".$row['file']."</a><img src='image/".$row['file']."' height='268' width='180'>";?></td>
                      <td>
                        <div >

                        <a href="#" class="edit-news btn btn-info btn-lg"
                        data-newsID="<?php echo $row['newsID']?>"
                      data-head="<?php echo $row['head']?>"
                      data-text="<?php echo $row['text']?>"
                      data-file="<?php echo $row['file']?>">Edit 
                          </a>
                          &nbsp;&nbsp;&nbsp;
                          <?php
                          echo "<a href='deleteNews.php?newsID=$row[newsID]'class='btn btn-danger btn-lg' 
                          onclick=\"return confirm('Are you sure to delete this record? !!!')\">
                          delete
                          </a>";?>
                        </div>
                        <br>
                      </td>
                    </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <div class="col-md-2"></div> 
            </div>
          </div>
</div>
<!-- Modal -->
<div class="modal fade" id="formEditNews">
            <div class="modal-dialog">
              <form action="updateNews.php" method="post" >
                <div class="modal-content">
                  <div class="modal-header">
                  </div>
                  <div class="modal-body">
                  <div class="form-group">
				                <label class="control-label col-sm-4">News ID:</label>
				                <div class="col-sm-10">          
					                <input type="text" name="newsID" id="newsID" readonly>
				                </div>
                            <div class="form-group">
				                <label class="control-label col-sm-4">Head news:</label>
				                <div class="col-sm-10">          
					                <input type="text" name="head" id="head" required >
				                </div>
                            </div>
                            <div class="form-group">
				                <label class="control-label col-sm-4">News:</label>
				                <div class="col-sm-10">          
					                <textarea name="text" id="text" cols="50" rows="10"></textarea>
				                </div>
                            </div>
                            <div class="form-group">
				                <label class="control-label col-sm-4">File:</label>
				                <div class="col-sm-10">          
					                <input type="text" name="fileupload" id="file" >
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
       $(document).ready(function(){
        $('.datatable').datatable();  
      });
      $('.edit-news').click(function(){
       
       // // get data from edit btn
       
         var newsID= $ (this).attr('data-newsID');
         var head= $ (this).attr('data-head');
         var text= $ (this).attr('data-text');
         var file= $ (this).attr('data-file');
       // // set value to modal
         $('#newsID').val(newsID);
         $('#head').val(head);
         $('#text').val(text);
         $('#file').val(file);
         
       $('#formEditNews').modal('show');
     });
  
    </script>
  </body>
</html>