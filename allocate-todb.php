<?php
  $course_no = $_POST['course_no'];
  $section = $_POST['section'];

  if($_POST['emp1'] !='' ){
      $emp1 = $_POST['emp1'];
        $sql = " INSERT INTO coursexuser (course_no, section, userid) VALUES ('$course_no', $section,  ) ";
  echo $sql;

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

echo "<br>";

  }
  if($_POST['emp2'] !='' ){
      $emp2 = $_POST['emp2'];
  }
    if($_POST['emp3'] !='' ){
      $emp3 = $_POST['emp3'];

  }
  if($_POST['emp4'] !='' ){
      $emp4 = $_POST['emp4'];
  }
    if($_POST['emp5'] !='' ){
      $emp5 = $_POST['emp5'];

  }
  if($_POST['emp6'] !='' ){
      $emp6 = $_POST['emp6'];
  }
  if($_POST['emp7'] !='' ){
      $emp7 = $_POST['emp7'];

  }
  if($_POST['emp8'] !='' ){
      $emp8 = $_POST['emp8'];
  }
  if($_POST['emp9'] !='' ){
      $emp9 = $_POST['emp9'];

  }
  if($_POST['emp10'] !='' ){
      $emp10 = $_POST['emp10'];
  }










  include("connect-database.php");

  $sql = " INSERT INTO course (course_no, course_title, credit, section, weeks_no, start_date, end_date) VALUES ('$course_no', '$course_title', '$credit', $section, $weeks_no, '$start_date', '$end_date'  ) ";
  echo $sql;

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

echo "<br>";






  mysqli_close($conn);
?>

