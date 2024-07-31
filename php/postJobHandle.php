
<?php
extract($_POST);
include("conn.php");

mysqli_select_db($conn, "ez_jobs");

$sql = "INSERT INTO jobs(uid,job_type,job_title,job_desc,job_req,locale,contact_no,email_cv,salary,closing_date) values(1,'$jobType','$job_title','$description','$requirements','$locale','$phoneNumber','$email','$salary','$closingDate')";

$result = mysqli_query($conn, $sql);

if (!$result) {
  die("Invalid query " . mysqli_error());
} else {
//   echo "Data inserted successfully";
    header("Location: ../jobs");
    echo "<script>alert('Job inserted')</script>";
}

mysqli_close($conn);
?>