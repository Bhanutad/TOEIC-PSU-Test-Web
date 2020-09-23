<?php 
include  'config.php';
$examDate = $_POST['examDate'];
$timeExam = $_POST['timeExam'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$getDate = $_POST['getDate'];
$timeGet = $_POST['timeGet'];
$applicantS = $_POST['applicantS'];
$applicantG = $_POST['applicantG'];
$faculty = $_POST['faculty'];
$note = $_POST['note'];

                $sql = "INSERT INTO schedule ( scheduleID, examDate, timeExam, startDate, endDate, getDate, timeGet, applicantS, applicantG, faculty, note)
				VALUES ('', '$examDate', '$timeExam', '$startDate', '$endDate', '$getDate', '$timeGet', '$applicantS', '$applicantG', '$faculty', '$note')";
                $result = mysqli_query($connect,$sql);
                mysqli_close($connect);

                if($result){
                    echo "<script type='text/javascript'>";
                    echo "alert('Successfully added schedule.');";
                    echo "window.location = 'schedule.php'; ";
                    echo "</script>";
                    }
                    else{
                    echo "<script type='text/javascript'>";
                    echo "alert('Something went wrong Please try again.');";
                    echo "window.location = 'addSchedule.php'; ";
                    echo "</script>";
                }
?>