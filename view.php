<?php
 include  'config.php';
 
$newsid = $_GET['id'];
$sqlnews = "SELECT * FROM news WHERE newsID = $newsid";

$result = mysqli_query($connect,$sqlnews );

while($row= mysqli_fetch_array( $result, MYSQLI_ASSOC)){
echo '<table align="center" border = "2" width="400" hight="500">';
echo "<tr>";
echo "<td>";
echo "<B>Headline: </B>".$row['head'];
echo "<br><br>";
echo $row['text'];
echo "<br><br>";
echo "<center><img src='image/".$row['file']."' height='%' width='70%'></center>";   
echo "</tr>";
echo "</td>";
echo "</table>";
}
?>