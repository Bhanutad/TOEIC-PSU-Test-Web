<?php 
include  'config.php';
$head = $_POST['head'];
$text = $_POST['text'];
$file = $_POST['file'];

                $sql = "INSERT INTO news ( newsID, head, text, file)
				VALUES ('', '$head', '$text', '$file')";
                $result = mysqli_query($connect,$sql);
                mysqli_close($connect);

                if($result){
                    echo "<script type='text/javascript'>";
                    echo "alert('Successfully added news.');";
                    echo "window.location = 'news.php'; ";
                    echo "</script>";
                    }
                    else{
                    echo "<script type='text/javascript'>";
                    echo "alert('Something went wrong Please try again.');";
                    echo "window.location = 'addNews.php'; ";
                    echo "</script>";
                }
?>