<?php 
include  'config.php';
$head = $_POST['head'];
$text = $_POST['text'];
$file = (isset($_POST['fileupload']) ? $_POST['fileupload'] : '');
$upload=$_FILES['fileupload'];

$time = time();
$data =date("Ymd"); //random date
$path ="image/";
$remove_these = array(' ','`','"','\'','\\','/','_');
$type = strrchr($_FILES['fileupload']['name'],"."); //เอาชื่อไฟล์ออกเหลือนามกุล

$newname =$data.$time.$type;
$path_copy = $path.$newname;

move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);

                $sql = "INSERT INTO news ( newsID, head, text, file)
				VALUES ('', '$head', '$text', '$newname')";
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