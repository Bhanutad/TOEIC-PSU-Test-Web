<?php 
include  'config.php';
$examDate = $_POST['examDate'];
$timeExam = $_POST['timeExam'];
$totime = $_POST['totime'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$getDate = $_POST['getDate'];
$applicantS = $_POST['applicantS'];
$applicantG = $_POST['applicantG'];
$coc = $_POST['coc'];
$fht = $_POST['fht'];
$fis = $_POST['fis'];
$fte = $_POST['fte'];
$note = $_POST['note'];

                $sql = "INSERT INTO schedule ( scheduleID, examDate, timeExam, totime, startDate, endDate, getDate, applicantS, applicantG, coc, fht, fis, fte, note)
				VALUES ('', '$examDate', '$timeExam', '$totime', '$startDate', '$endDate', '$getDate', '$applicantS', '$applicantG', '$coc', '$fht', '$fis', '$fte','$note')";
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