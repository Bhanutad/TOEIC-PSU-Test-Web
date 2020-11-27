<?php 
include  'config.php';
$appID = $_POST['appID'];
$type = $_POST['type'];
$price= $_POST['price'];
                $sql = "UPDATE applicant SET  
                type ='$type' ,
                price='$price'  
                WHERE appID ='$appID' ";
                $result = mysqli_query($connect,$sql);
                mysqli_close($connect);


                if($result){
                    echo "<script type='text/javascript'>";
                    echo "alert('Successfully updated admin.');";
                    echo "window.location = 'applicant.php'; ";
                    echo "</script>";
                    }
                    else{
                    echo "<script type='text/javascript'>";
                    echo "alert('Something went wrong Please try again.');";
                    echo "window.location = 'applicant.php'; ";
                    echo "</script>";
                }
 
?>