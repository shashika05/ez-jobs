<?php
extract($_POST);
include("conn.php");

mysqli_select_db($conn, "ez_jobs");

// $sql = "INSERT INTO users(uname,email,pwd) value('$uname','$email','$pwd')";
$sql = "SELECT * from users where email='$email'";

$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "<script>alert('User not found')</script>";
} else {
    $row = mysqli_fetch_array($result);
    if (isset($row['pwd'])) {
        if($pwd == $row['pwd']){
            session_start();
            $_SESSION['email']=$email;
            $_SESSION['auth']=true;
            header("Location: ../");
        } else {
            echo "<script>alert('Password doesn't match')</script>";
            header("Location: ../login");
        }
    } else {
        echo "<script>alert('User not found')</script>";
        header("Location: ../login");
    }
}

mysqli_close($conn);
