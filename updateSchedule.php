<?php 
include  'config.php';
$scheduleID = $_POST['scheduleID'];
$examDate = $_POST['examDate'];
$timeExam = $_POST['timeExam'];
$totime = $_POST['totime'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$getDate = $_POST['getDate'];

if (isset($_POST['applicantS'])) {
    $applicantS = $_POST['applicantS'];
	$applicantS = "Student";
} else {
	$applicantS = "";
}

if (isset($_POST['applicantG'])) {
    $applicantG = $_POST['applicantG'];
	$applicantG = "General";
} else {
	$applicantG = "";
}

if (isset($_POST['coc'])) {
    $coc = $_POST['coc'];
	$coc = "College of Computing";
} else {
	$coc= "";
}

if (isset($_POST['fht'])) {
    $fht = $_POST['fht'];
	$fht = "Hospitality and Tourism";
} else {
	$fht= "";
}

if (isset($_POST['fis'])) {
    $fis = $_POST['fis'];
	$fis = "International Studies";
} else {
	$fis= "";
}

if (isset($_POST['fte'])) {
    $fte = $_POST['fte'];
	$fte = "Technology and Evironment";
} else {
	$fte= "";
}

$note = $_POST['note'];

                $sql = "UPDATE schedule SET  
                examDate ='$examDate' ,
                timeExam='$timeExam' , 
                totime='$totime' ,
                startDate='$startDate' ,
                endDate ='$endDate' ,
                getDate='$getDate' , 
                applicantS='$applicantS' ,
                applicantG='$applicantG' ,
                coc='$coc' ,
                fht='$fht' ,
                fis='$fis' ,
                fte='$fte' ,
                note='$note' 
                WHERE scheduleID ='$scheduleID' ";
                $result = mysqli_query($connect,$sql);
                mysqli_close($connect);


                if($result){
                    echo "<script type='text/javascript'>";
                    echo "alert('Successfully updated schedule.');";
                    echo "window.location = 'schedule.php'; ";
                    echo "</script>";
                    }
                    else{
                    echo "<script type='text/javascript'>";
                    echo "alert('Something went wrong Please try again.');";
                    echo "window.location = 'schedule.php'; ";
                    echo "</script>";
                }
 
?>