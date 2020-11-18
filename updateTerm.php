<?php 
include  'config.php';
$termID = $_POST['termID'];
$text = $_POST['text'];
$text =  mysqli_real_escape_string($connect,$text);
 
                $sql = "UPDATE term SET  text ='$text'
                WHERE termID = '$termID'";
                $result = mysqli_query($connect,$sql);
                mysqli_close($connect);
                // echo $sql;

                if($result){
                    echo "<script type='text/javascript'>";
                    echo "alert('Successfully updated term and condition.');";
                    echo "window.location = 'term.php'; ";
                    echo "</script>";
                    }
                    else{
                    echo "<script type='text/javascript'>";
                    echo "alert('Something went wrong Please try again.');";
                    echo "window.location = 'term.php'; ";
                    echo "</script>";
                }
 
?>