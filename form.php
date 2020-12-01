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
        .row{
            margin-top: 25px;
            margin-bottom: 50px;
        }
        td{
            padding-top: 20px;
            padding-left: 20px;
            padding-bottom: 20px;
        }
    </style>
  </head>
  <body>
      <div class="container" >
          <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4">
                <?php
                    include  'config.php';
                    $examID = $_POST['examID'];
                    $sqlexam = "SELECT * FROM exam WHERE examID = $examID";
                    $result = mysqli_query($connect,$sqlexam );

                    while($row= mysqli_fetch_array( $result, MYSQLI_ASSOC)){ 
                ?>
                    <table align="center" border = "1" cellpading="10" width="450" hight="500" id="HTMLtoPDF">
                        <tr>
                            <td>
                                <B>Exam Date: </B> <?php echo $row['examDate'];?><br>
                                <B>Name: </B> <?php echo $row['name'].'&nbsp;'.$row['lastname'].'&nbsp;'.'<B>Gender: </B> '.$row['gender']?><br>
                                <B>Date of Birth: </B> <?php echo $row['dob'].'&nbsp;'.'<B>Mobile: </B> '.$row['phone']?><br>
                                <B>Email: </B> <?php echo $row['email']?><br>
                                <B>Applicant Type: </B> <?php echo $row['applicant'].'&nbsp;'.'<B>StudentID: </B> '.$row['studentID']?><br>
                                <B>Faculry: </B> <?php echo $row['faculty'].'&nbsp;'.'<B>Major: </B> '.$row['major']?><br>
                                <B>ID Card/Passport No: </B> <?php echo $row['idCard']?><br>
                                <B>National: </B> <?php echo $row['national']?>&nbsp;&nbsp;<br>
                                <B>Receipt: </B><br> <?php echo "<img src='image/".$row['image']."' height='%' width='75%'>"; ?>
                            </td>
                        </tr>
                    </table>
                <?php
                    }
                ?>
              </div>
              <div class="col-md-4"></div>
          </div>
      </div>
      <div style="text-align: center;">
            <a href="#" onclick="HTMLtoPDF()" class="btn btn-warning btn-lg">Download PDF</a>
          </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jspdf.js"></script>
	<script src="js/jquery-2.1.3.js"></script>
    <script src="js/pdfFromHTML.js"></script>
  </body>
</html>