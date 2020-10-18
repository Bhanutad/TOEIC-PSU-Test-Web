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
      margin-top: 20px;
} 
    </style>
  </head>
  <body>
  <div>
    <div>
      <h1 class="display-2">SCHEDULE</h1>
    </div>
    <div class="container">
	      <div class="row">
		      <div class="col-md-4"></div>
		      <div class="col-md-4">
		        <div style="text-align: center" >
	        	  <a href="addSchedule.php">
		          <button class="btn btn-primary btn-lg">Add new schedule</button>
		          </a>
		        </div>
		      </div>
		      <div class="col-md-4"></div>
	      </div>
    </div>
    <br>
    <div class="container">
            <div class="row">
              <div class="col-md-0"></div>
              <div class="col-md-12">
                <table class="table datatable ">
                  <thead class="head">
                    <tr>
                      <th>Exam Date</th>
                      <th>Time Exam</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Getting Result</th>
                      <th>Applicant</th>
                      <th>Faculty</th>
                      <th>Note</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include  'config.php';
                    
                    $sqlschedule = 'SELECT * FROM schedule   ORDER BY scheduleID WHERE deleteStatus = 1';
                    $resulschedule = mysqli_query($connect,$sqlschedule);
                    while($row= mysqli_fetch_array( $resulschedule, MYSQLI_ASSOC)){
                    ?>
                    <tr>
                      <td> <?php echo "$row[examDate]" ?></td>
                      <td> <?php echo "$row[timeExam]"."-"."$row[totime]"?></td>
                      <td> <?php echo "$row[startDate]" ?></td>
                      <td> <?php echo "$row[endDate]" ?></td>
                      <td> <?php echo "$row[getDate]" ?></td>
                      <td> <?php echo "$row[applicantS]"."<br>"."$row[applicantG]" ?></td>
                      <td> <?php echo "$row[coc]"."<br>"."$row[fht]"."<br>"."$row[fis]"."<br>"."$row[fte]" ?></td>
                      <td> <?php echo "$row[note]" ?></td>
                      <td>
                        <div >
                        <a href="#" class="edit-schedule btn btn-warning btn-lg"
                      
                      data-scheduleID="<?php echo $row['scheduleID']?>"
                      data-examDate="<?php echo $row['examDate']?>"
                      data-timeExam="<?php echo $row['timeExam']?>"
                      data-totime="<?php echo $row['totime']?>"
                      data-startDate="<?php echo $row['startDate']?>"
                      data-endDate="<?php echo $row['endDate']?>"
                      data-getDate="<?php echo $row['getDate']?>"
                      data-applicantS="<?php echo $row['applicantS']?>"
                      data-applicantG="<?php echo $row['applicantG']?>"
                      data-coc="<?php echo $row['coc']?>"
                      data-fht="<?php echo $row['fht']?>"
                      data-fis="<?php echo $row['fis']?>"
                      data-fte="<?php echo $row['fte']?>"
                      data-note="<?php echo $row['note']?>">Edit
                          </a>
                        </div>
                        <br>
                        <div>
                        <?php
                          echo "<a href='deleteSchedule.php?scheduleID=$row[scheduleID]'class='btn btn-danger btn-lg' 
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
              <div class="col-md-0"></div> 
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="formEditSchedule">
            <div class="modal-dialog">
              <form action="updateSchedule.php" method="post" >
                <div class="modal-content">
                  <div class="modal-header">
                  </div>
                  <div class="modal-body">
                  <div class="form-group" type="hidden">
				                <label class="control-label col-sm-4">Schedule ID:</label>
				                <div class="col-sm-10">          
					                <input type="text" name="scheduleID" id="scheduleID" readonly>
                        </div>
                  </div>
                  <div class="form-group">
				  <label class="control-label col-sm-4">Exam date:</label>
				  <div class="col-sm-10">          
					<input type="date" name="examDate" value="YYYY-MM-DD" id="examDate" min="2020-01-01" max="3000-31-12" required>
				  </div>
                </div>
                <div class="form-group">
				  <label class="control-label col-sm-4">Time:</label>
				  <div class="col-sm-10">          
                  <input type="time" name="timeExam" id="timeExam" required>
          </div>
                </div>
                <div class="form-group">
				  <label class="control-label col-sm-4">To:</label>
				  <div class="col-sm-10">          
                  <input type="time" name="totime" id="totime" required>
				  </div>
                </div>
                <div class="form-group">
				  <label class="control-label col-sm-8">Start registeration date:</label>
				  <div class="col-sm-10">          
					<input type="date" name="startDate" id="startDate"  value="YYYY-MM-DD" min="2020-01-01" max="3000-31-12" required>
				  </div>
                </div>
                <div class="form-group">
				  <label class="control-label col-sm-8">End registeration date:</label>
				  <div class="col-sm-10">          
					<input type="date" name="endDate" id="endDate"  value="YYYY-MM-DD" min="2020-01-01" max="3000-31-12" required>
				  </div>
                </div>
                <div class="form-group">
				  <label class="control-label col-sm-8">Getting result:</label>
				  <div class="col-sm-10">          
					<input type="date" name="getDate" id="getDate" value="YYYY-MM-DD" min="2020-01-01" max="3000-31-12" required>
				  </div>
                </div>
                <div class="form-group">
				  <label class="control-label col-sm-8">Applicant type:</label>
				  <div class="col-sm-10">          
                <input type="checkbox" name="applicantS" id="applicantS"  value="Student" >&nbsp;Student <br>
                <input type="checkbox" name="applicantG" id="applicantG" value="General">&nbsp;General
				  </div>
                </div>
                <div class="form-group">
				  <label class="control-label col-sm-4">Faculty:</label>
				  <div class="col-sm-10">          
                <input type="checkbox" name="coc" id="coc" value="College of Computing">&nbsp;College of Computing<br>
                <input type="checkbox" name="fht" id="fht" value="Hospitality and Tourism">&nbsp;Hospitality and Tourism <br>
                <input type="checkbox" name="fis" id="fis" value="International Studies">&nbsp;International Studies<br>
                <input type="checkbox" name="fte" id="fte" value="Technology and Evironment">&nbsp;Technology and Evironment<br>
				  </div>
                </div>
                <div class="form-group">
				  <label class="control-label col-sm-4">Note:</label>
				  <div class="col-sm-10">          
                  <input type="text" name="note" id="note" placeholder="About student ID" required>
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
      $('.edit-schedule').click(function(){
         //get data from edit btn
            var scheduleID=$(this).attr('data-scheduleID');
            var examDate=$(this).attr('data-examDate');
            var timeExam=$(this).attr('data-timeExam');
            var totime=$(this).attr('data-totime');
            var startDate=$(this).attr('data-startDate');
            var endDate=$(this).attr('data-endDate');
            var getDate=$(this).attr('data-getDate');
            var note=$(this).attr('data-note');

// check it was checked?
            var applicantS = $(this).attr('data-applicantS');
              if(applicantS === "Student"){
                document.getElementById("applicantS").checked = true;
              }else{
                document.getElementById("applicantS").checked = false;
              }

            var applicantG=$(this).attr('data-applicantG');
            if(applicantG === "General"){
                document.getElementById("applicantG").checked = true;
              }else{
                document.getElementById("applicantG").checked = false;
              }

            var coc=$(this).attr('data-coc');
            if(coc === "College of Computing"){
                document.getElementById("coc").checked = true;
              }else{
                document.getElementById("coc").checked = false;
              }

            var fht=$(this).attr('data-fht');
            if(fht === "Hospitality and Tourism"){
                document.getElementById("fht").checked = true;
              }else{
                document.getElementById("fht").checked = false;
              }

            var fis=$(this).attr('data-fis');
            if(fis === "International Studies"){
                document.getElementById("fis").checked = true;
              }else{
                document.getElementById("fis").checked = false;
              }

            var fte=$(this).attr('data-fte');
            if(fte === "Technology and Evironment"){
                document.getElementById("fte").checked = true;
              }
              else{
                document.getElementById("fte").checked = false;
              }

          // set value to modal
          $('#scheduleID').val(scheduleID);
          $('#examDate').val(examDate);
          $('#timeExam').val(timeExam);
          $('#totime').val(totime);
          $('#startDate').val(startDate);
          $('#endDate').val(endDate);
          $('#getDate').val(getDate);
          $('#applicantS').val(applicantS);
          $('#applicantG').val(applicantG);
          $('#coc').val(coc);
          $('#fht').val(fht);
          $('#fis').val(fis);
          $('#fte').val(fte);
          $('#note').val(note);

          $('#formEditSchedule').modal('show');
        });
    </script>
  </body>
</html>