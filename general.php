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
             <h1 class="display-2">General name list</h1>
          </div>
          <br>
          <div class="container">
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">
              <form name="frmSearch" method="get" action="general.php">
                <tr>
                  <th>
                    <input name="txtKeyword" type="text" id="txtKeyword" placeholder="All">
                    <input type="submit" value="Search"></th>
                </tr>
              </form>
              </div>
              <div class="col-md-1"></div>
            </div>
          </div>
    <div class="container">
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">
              <?php
              include 'config.php';
              if (isset($_GET['txtKeyword'])) {
                $txtKeyword = $_GET['txtKeyword'];
                $txtKeyword = "txtKeyword";
              } else {
                 $txtKeyword = "";
                }
if($txtKeyword == "" )
	{
        $sqlgeneral = 'SELECT * FROM general   ORDER BY generalID';
        $resultgeneral = mysqli_query($connect,$sqlgeneral);
	?>
                <table class="table datatable">
                  <thead class="head">
                    <tr>
                      <th>National</th>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Phone</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include  'config.php';

                    $sqlgeneral = 'SELECT * FROM general   ORDER BY generalID';
                    $resultgeneral = mysqli_query($connect,$sqlgeneral);
                    while($row= mysqli_fetch_array( $resultgeneral, MYSQLI_ASSOC)){
                    ?>
                    <tr>
                      <td> <?php echo "$row[national]"?></td>
                      <td> <?php echo "$row[name]"?></td>
                      <td> <?php echo "$row[lastname]" ?></td>
                      <td> <?php echo "$row[phone]"?></td>
                      <td>
                        <div >

                    
                        <a href="#" class="view-general btn btn-success btn-lg"
                      data-generalID="<?php echo $row['generalID']?>"
                      data-username="<?php echo $row['username']?>"
                      data-idCard="<?php echo $row['idCard']?>"
                      data-national="<?php echo $row['national']?>"
                      data-name="<?php echo $row['name']?>"
                      data-lastname="<?php echo $row['lastname']?>"
                      data-dob="<?php echo $row['dob']?>"
                      data-gender="<?php echo $row['gender']?>"
                      data-faculty="<?php echo $row['faculty']?>"
                      data-major="<?php echo $row['major']?>"
                      data-email="<?php echo $row['email']?>"
                      data-phone="<?php echo $row['phone']?>">View
                          </a>
                          &nbsp;&nbsp;&nbsp;

                          <?php
                          echo "<a href='deletegeneral.php?generalID=$row[generalID]'class='btn btn-danger btn-lg' 
                          onclick=\"return confirm('Are you sure to delete this record? !!!')\">
                          delete
                          </a>";?>
                        </div>
                      </td>
                    </tr>
                    <?php
                    }
                    ?>
                    <?php
}else if($txtKeyword != "" )
    {
     include  'config.php';
     $sqlgeneral = "SELECT * FROM general WHERE
        (name LIKE '%".$_GET["txtKeyword"]."%' or idCard LIKE '%".$_GET["txtKeyword"]."%' )";
                    $resultgeneral = mysqli_query($connect,$sqlgeneral);
                    ?>
                  <table class="table datatable">
                  <thead class="head">
                    <tr>
                     <th>National</th>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Phone</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    while($row= mysqli_fetch_array( $resultgeneral, MYSQLI_ASSOC)){
                    ?>
                    <tr>
                    <td> <?php echo "$row[national]"?></td>
                      <td> <?php echo "$row[name]"?></td>
                      <td> <?php echo "$row[lastname]" ?></td>
                      <td> <?php echo "$row[phone]"?></td>
                      <td>
                        <div >

                        <a href="#" class="view-general btn btn-success btn-lg"
                      data-generalID="<?php echo $row['generalID']?>"
                      data-username="<?php echo $row['username']?>"
                      data-idCard="<?php echo $row['idCard']?>"
                      data-national="<?php echo $row['national']?>"
                      data-name="<?php echo $row['name']?>"
                      data-lastname="<?php echo $row['lastname']?>"
                      data-dob="<?php echo $row['dob']?>"
                      data-gender="<?php echo $row['gender']?>"
                      data-faculty="<?php echo $row['faculty']?>"
                      data-major="<?php echo $row['major']?>"
                      data-email="<?php echo $row['email']?>"
                      data-phone="<?php echo $row['phone']?>">View
                          </a>
                          &nbsp;&nbsp;&nbsp;

                          <?php
                          echo "<a href='deleteGeneral.php?generalID=$row[generalID]'class='btn btn-danger btn-lg' 
                          onclick=\"return confirm('Are you sure to delete this record? !!!')\">
                          delete
                          </a>";?>
                        </div>
                      </td>
                    </tr>
                    <?php
	                    }
	                  ?>
	                </table>                
 <?php                   
}
?>
                  </tbody>
                </table>
              </div>
              <div class="col-md-1"></div> 
            </div>
          </div> 
      </div>
      <!-- Modal -->
      <div class="modal fade" id="formView">
            <div class="modal-dialog">
            <form action="history.php" method="post" >
                <div class="modal-content">
                  <div class="modal-header"></div>
                  <div class="modal-body"><pre>
                    GeneralID:            <input type="text" id="generalID" readonly><br>
                    Username:             <input type="text" id="username" readonly><br>
                    ID card/ passport No: <input type="text" name="idCard" id="idCard" readonly><br>
                    National:             <input type="text" id="national" readonly><br>
                    Firstname:            <input type="text" id="name" readonly><br>
                    Lastname:             <input type="text" id="lastname" readonly><br>
                    Date of birth:        <input type="text" id="dob" readonly><br>
                    Gender:               <input type="text" id="gender" readonly><br>
                    Email:                <input type="text" id="email" readonly><br>
                    Phone:                <input type="text" id="phone" readonly> </pre>
                </div>
                  <div class="modal-footer">
                  <div >
                  <input type="submit" class="btn btn-primary btn-lg " value="Check">
                </div>
                  <div style="text-align: center;">
                <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button>
                </div>
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
      $('.view-general').click(function(){
       
          // // get data from edit btn
            var generalID= $ (this).attr('data-generalID');
            var username= $ (this).attr('data-username');
            var idCard= $ (this).attr('data-idCard');
            var national= $ (this).attr('data-national');
            var name= $ (this).attr('data-name');
            var lastname= $ (this).attr('data-lastname');
            var dob = $(this).attr('data-dob');
            var gender= $ (this).attr('data-gender');
            var faculty= $ (this).attr('data-faculty');
            var major= $ (this).attr('data-major');
            var email= $ (this).attr('data-email');
            var phone = $(this).attr('data-phone');
          // // set value to modal
            $('#generalID').val(generalID);
            $('#username').val(username);
            $('#idCard').val(idCard);
            $('#national').val(national);
            $('#name').val(name);
            $('#lastname').val(lastname);
            $('#dob').val(dob);
            $('#gender').val(gender);
            $('#faculty').val(faculty);
            $('#major').val(major);
            $('#email').val(email);
            $('#phone').val(phone);
            
          $('#formView').modal('show');
        });
     
    </script>
  </body>
</html>