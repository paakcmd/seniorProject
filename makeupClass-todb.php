<?php
  $course_no = $_POST['course_no'];

  $section = $_POST['section'];
  $remark = $_POST['type'];

  $start_date0 = $_POST["start_date"];
  $start_date = date('Y-m-d', strtotime($start_date0));

  $time_from = $_POST["time_from"];
  $time_to = $_POST["time_to"];

  $time_diff = strtotime($time_to) - strtotime($time_from);

  $duration = date("H:i", $time_diff);

  // if ($remark =='absent') {
  //   $user_id = $_POST["user_id"];
  // }



  include("connect-database.php");

  if ($remark =='absent') {
    $user_id = $_POST["user_id"];
  $sql2 = " INSERT INTO teachlog (course_no, section, type, date, time_from, time_to, duration, user_id) VALUES ('$course_no', $section, '$remark', '$start_date', '$time_from', '$time_to', '$duration', $user_id) ";
  echo $sql2;
  }else{
    
  $sql2 = " INSERT INTO teachlog (course_no, section, type, date, time_from, time_to, duration) VALUES ('$course_no', $section, '$remark', '$start_date', '$time_from', '$time_to', '$duration') ";
  echo $sql2;
  }




  if (mysqli_query($conn, $sql2)) {
    echo "New record created successfully";
  } else {
      echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
?>
