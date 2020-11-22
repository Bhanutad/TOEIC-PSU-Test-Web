<?php 
include  'config.php';
$newsID = $_POST['newsID'];
$head = $_POST['head'];
$text= $_POST['text'];
$file= $_POST['fileupload'];
$text =  mysqli_real_escape_string($connect,$text);

                $sql = "UPDATE news SET  
                head ='$head' ,
                text='$text' , 
                file='$file' 
                WHERE newsID ='$newsID' ";
                $result = mysqli_query($connect,$sql);
                mysqli_close($connect);


                if($result){
                    echo "<script type='text/javascript'>";
                    echo "alert('Successfully updated news.');";
                    echo "window.location = 'news.php'; ";
                    echo "</script>";
                    }
                    else{
                    echo "<script type='text/javascript'>";
                    echo "alert('Something went wrong Please try again.');";
                    echo "window.location = 'news.php'; ";
                    echo "</script>";
                }
 
?>