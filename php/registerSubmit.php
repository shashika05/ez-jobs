
<?php
extract($_POST);
include("conn.php");

mysqli_select_db($conn, "ez_jobs");

$sql = "INSERT INTO users(uname,email,pwd) value('$uname','$email','$pwd')";

$result = mysqli_query($conn, $sql);

if (!$result) {
  die("Invalid query " . mysqli_error());
} else {
  $_SESSION['email']=$email;
  $_SESSION['auth']=true;
  header("Location: ../");
}

mysqli_close($conn);
?>