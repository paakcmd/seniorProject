<?php
  $course_no = $_POST['course_no'];
  $course_title = $_POST['course_no'];
  $credit = $_POST['credit'];

  include("connect-database.php");

  $sql = " INSERT INTO course (course_no, course_title, credit) VALUES ('$course_no', '$course_title', '$credit' ) ";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
?>
