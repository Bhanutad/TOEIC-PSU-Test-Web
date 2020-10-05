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
             <h1 class="display-2">Student name list</h1>
          </div>
          <br>
          <div class="container">
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">
                
              </div>
              <div class="col-md-1"></div>
            </div>
          </div>
    <div class="container">
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">
                <table class="table datatable">
                  <thead class="head">
                    <tr>
                      <th>Student ID</th>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Faculty</th>
                      <th>Major</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include  'config.php';

                    $sqlstudent = 'SELECT * FROM student   ORDER BY studentID';
                    $resultstudent = mysqli_query($connect,$sqlstudent);
                    while($row= mysqli_fetch_array( $resultstudent, MYSQLI_ASSOC)){
                    ?>
                    <tr>
                      <td> <?php echo "$row[studentID]" ?></td>
                      <td> <?php echo "$row[name]"?></td>
                      <td> <?php echo "$row[lastname]" ?></td>
                      <td> <?php echo "$row[faculty]"?></td>
                      <td> <?php echo "$row[major]" ?></td>
                      <td>
                        <div >

                    
                        <a href="#" class="view-student btn btn-success btn-lg"
                      data-studentID="<?php echo $row['studentID']?>"
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
                          echo "<a href='deleteStudent.php?studentID=$row[studentID]'class='btn btn-danger btn-lg' 
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
              <div class="col-md-1"></div> 
            </div>
          </div> 
      </div>
      <!-- Modal -->
      <div class="modal fade" id="formView">
            <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header"></div>
                  <div class="modal-body"><pre>
                    StudentID:            <input type="text" id="studentID" disabled><br>
                    ID card/ passport No: <input type="text" id="idCard" disabled><br>
                    National:             <input type="text" id="national" disabled><br>
                    Firstname:            <input type="text" id="name" disabled><br>
                    Lastname:             <input type="text" id="lastname" disabled><br>
                    Date of birth:        <input type="text" id="dob" disabled><br>
                    Gender:               <input type="text" id="gender" disabled><br>
                    Faculty:              <input type="text" id="faculty" disabled><br>
                    Major:                <input type="text" id="major" disabled><br>
                    Email:                <input type="text" id="email" disabled><br>
                    Phone:                <input type="text" id="phone" disabled> </pre>
                </div>
                  <div class="modal-footer">
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
            var studentID= $ (this).attr('data-studentID');
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
            $('#studentID').val(studentID);
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