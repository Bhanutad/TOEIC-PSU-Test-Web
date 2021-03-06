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
             <h1 class="display-1">Waiting for approve</h1>
          </div>
          <br>
          <div class="container">
            <div class="row">
              <div class="col-md-0"></div>
              <div class="col-md-12">
              <form name="frmSearch" method="get" action="home.php">
                <tr>
                  <th>
                    <input name="txtKeyword" type="text" id="txtKeyword" placeholder="All">
                    <input type="submit" value="Search"></th>
                </tr>
              </form>
              </div>
              <div class="col-md-0"></div>
            </div>
          </div>
    <div class="container">
            <div class="row">
              <div class="col-md-0"></div>
              <div class="col-md-12">
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
        $sqlexam = 'SELECT * FROM exam WHERE statusShow = 0';
        $resultexam = mysqli_query($connect,$sqlexam);
	?>
                <table class="table datatable">
                  <thead class="head">
                    <tr>
                      <th>Examination Date</th>
                      <th>Applicant type</th>
                      <th>ID card/Passport No.</th>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    while($row= mysqli_fetch_array( $resultexam, MYSQLI_ASSOC)){
                    ?>
                    <tr>
                      <td> <?php echo "$row[examDate]" ?></td>
                      <td> <?php echo "$row[applicant]" ?></td>
                      <td> <?php echo "$row[idCard]"?></td>
                      <td> <?php echo "$row[name]" ?></td>
                      <td> <?php echo "$row[lastname]" ?></td>
                      <td>
                        <div >
                        <a href="#" class="view-student btn btn-success btn-lg"
                      data-examID="<?php echo $row['examID']?>"
                      data-examDate="<?php echo $row['examDate']?>"
                      data-timeExam="<?php echo $row['timeExam']?>"
                      data-applicant="<?php echo $row['applicant']?>"
                      data-idCard="<?php echo $row['idCard']?>"
                      data-name="<?php echo $row['name']?>"
                      data-lastname="<?php echo $row['lastname']?>"
                      data-national="<?php echo $row['national']?>"
                      data-studentID="<?php echo $row['studentID']?>"
                      data-faculty="<?php echo $row['faculty']?>"
                      data-major="<?php echo $row['major']?>"
                      data-gender="<?php echo $row['gender']?>"
                      data-dob="<?php echo $row['dob']?>"
                      data-email="<?php echo $row['email']?>"
                      data-phone="<?php echo $row['phone']?>"
                      data-image="<?php echo $row['image']?>">View
                          </a>

                          <?php
                          echo "<a href='updateStatus.php?examID=$row[examID]'class='btn btn-warning btn-lg' 
                          onclick=\"return confirm('Are you sure to confirm? !!!')\">
                          Confirm
                          </a>           ";
                          echo "<a href='deleteExam.php?examID=$row[examID]'class='btn btn-danger btn-lg' 
                          onclick=\"return confirm('Are you sure to delete this record? !!!')\">
                          Delete
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
     $sqlexam = "SELECT * FROM exam WHERE statusShow = 0 &&
        (name LIKE '%".$_GET["txtKeyword"]."%' or lastname LIKE '%".$_GET["txtKeyword"]."%' or applicant LIKE '%".$_GET["txtKeyword"]."%' or studentID LIKE '%".$_GET["txtKeyword"]."%' or idCard LIKE '%".$_GET["txtKeyword"]."%')";
                    $resultexam = mysqli_query($connect,$sqlexam);
                    ?>
                  <table class="table datatable">
                  <thead class="head">
                    <tr>
                      <th>Examination Date</th>
                      <th>Applicant type</th>
                      <th>ID card/Passport No.</th>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    while($row= mysqli_fetch_array( $resultexam, MYSQLI_ASSOC)){
                    ?>
                    <tr>
                      <td> <?php echo "$row[examDate]" ?></td>
                      <td> <?php echo "$row[applicant]" ?></td>
                      <td> <?php echo "$row[idCard]"?></td>
                      <td> <?php echo "$row[name]" ?></td>
                      <td> <?php echo "$row[lastname]" ?></td>
                      <td>
                        <div >
                        <a href="#" class="view-student btn btn-success btn-lg"
                      data-examID="<?php echo $row['examID']?>"
                      data-examDate="<?php echo $row['examDate']?>"
                      data-timeExam="<?php echo $row['timeExam']?>"
                      data-applicant="<?php echo $row['applicant']?>"
                      data-idCard="<?php echo $row['idCard']?>"
                      data-name="<?php echo $row['name']?>"
                      data-lastname="<?php echo $row['lastname']?>"
                      data-national="<?php echo $row['national']?>"
                      data-studentID="<?php echo $row['studentID']?>"
                      data-faculty="<?php echo $row['faculty']?>"
                      data-major="<?php echo $row['major']?>"
                      data-gender="<?php echo $row['gender']?>"
                      data-dob="<?php echo $row['dob']?>"
                      data-email="<?php echo $row['email']?>"
                      data-phone="<?php echo $row['phone']?>"
                      data-image="<?php echo $row['image']?>">View
                          </a>

                          <?php
                          echo "<a href='updateStatus.php?examID=$row[examID]'class='btn btn-warning btn-lg' 
                          onclick=\"return confirm('Are you sure to confirm? !!!')\">
                          Confirm
                          </a>           ";
                          echo "<a href='deleteExam.php?examID=$row[examID]'class='btn btn-danger btn-lg' 
                          onclick=\"return confirm('Are you sure to delete this record? !!!')\">
                          Delete
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
              <div class="col-md-0"></div> 
            </div>
          </div> 
      </div>
      <!-- Modal -->
      <div class="modal fade" id="formView">
            <div class="modal-dialog">
            <form action="form.php" method="post" >
                <div class="modal-content">
                  <div class="modal-header">
                  <input type="text" name="examID" id="examID" readonly hidden> 
                  Firstname:<input type="text" id="name" readonly>
                  Lastname:<input type="text" id="lastname" readonly>
                  </div>
                  <div class="modal-body"><pre>
                    StudentID:            <input type="text" id="studentID" readonly><br>
                    ID card/ passport No: <input type="text" name="idCard" id="idCard" readonly><br>
                    National:             <input type="text" id="national" readonly><br>
                    Date of birth:        <input type="text" id="dob" readonly><br>
                    Gender:               <input type="text" id="gender" readonly><br>
                    Faculty:              <input type="text" id="faculty" readonly><br>
                    Major:                <input type="text" id="major" readonly><br>
                    Email:                <input type="text" id="email" readonly><br>
                    Phone:                <input type="text" id="phone" readonly></pre>
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
      $('.view-student').click(function(){
       
          // // get data from edit btn
            var examID= $ (this).attr('data-examID');
            var examDate= $ (this).attr('data-examDate');
            var timeExam= $ (this).attr('data-timeExam');
            var applicant= $ (this).attr('data-applicant');
            var idCard= $ (this).attr('data-idCard');
            var name= $ (this).attr('data-name');
            var lastname= $ (this).attr('data-lastname');
            var national= $ (this).attr('data-national');
            var studentID= $ (this).attr('data-studentID');
            var faculty= $ (this).attr('data-faculty');
            var major= $ (this).attr('data-major');
            var dob = $(this).attr('data-dob');
            var gender= $ (this).attr('data-gender');
            var email= $ (this).attr('data-email');
            var phone = $(this).attr('data-phone');
          // // set value to modal
            $('#examID').val(examID);
            $('#examDate').val(examDate);
            $('#timeExam').val(timeExam);
            $('#applicant').val(applicant);
            $('#idCard').val(idCard);
            $('#name').val(name);
            $('#lastname').val(lastname);
            $('#national').val(national);
            $('#studentID').val(studentID);
            $('#faculty').val(faculty);
            $('#major').val(major);
            $('#dob').val(dob);
            $('#gender').val(gender);
            $('#email').val(email);
            $('#phone').val(phone);
            
          $('#formView').modal('show');
        });
     
    </script>
  </body>
</html>