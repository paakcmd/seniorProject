<?php
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $department = $_POST['department'];
  $highest_degree = $_POST['highest_degree'];
  $highest_degree_other = $_POST['highest_degree_other'];
  $level = $_POST['level'];
  $address = $_POST['address'];
  $position = $_POST['position'];
  $account_number = $_POST['account_number'];
  $bank_branch = $_POST['bank_branch'];
  $phone = $_POST['phone'];
  $mobile = $_POST['mobile'];
  $fax = $_POST['fax'];
  $email = $_POST['email'];
  $home_address = $_POST['home_address'];
  $course_no = $_POST['course_no'];
  $section = $_POST['section'];
  $weeks = $_POST['weeks'];
  $no_of_weeks = $_POST['no_of_weeks'];
  $renumeration_rate = $_POST['renumeration_rate'];
  $traveling_expense = $_POST['traveling_expense'];


  include("connect-database.php");

  $sql = " INSERT INTO user_info (first_name, last_name, department, highest_degree, highest_degree_other, level, address, position, account_number, bank_branch, phone, mobile, fax, email, home_address, course_no, section, weeks, no_of_weeks, renumeration_rate, traveling_expense) VALUES ('$first_name', '$last_name', '$department', '$highest_degree', '$highest_degree_other', '$level', '$address', '$position', '$account_number', '$bank_branch', '$phone', '$mobile', '$fax', '$email', '$home_address', '$course_no', '$section', '$weeks' , '$no_of_weeks', '$renumeration_rate', '$traveling_expense') ";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
?>
