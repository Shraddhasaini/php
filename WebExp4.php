<?php
include("connection.php");
$title = $_POST['title'];
$date = $_POST['date'];
$content = $_POST['content'];
$allInfo = "INSERT INTO blogs(title,date,content) VALUES('$title,'$date,'$content')";
if(mysqli_query($conn,$allInfo)){
echo "";
}
else{
echo "Error Created" . mysqli_error($conn);
}
?>
