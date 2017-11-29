<?php
include('connect-database.php');


$email = mysql_real_escape_string($_POST['email']);
$password = md5(mysql_real_escape_string($_POST['password']));

$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";

if ($query = mysqli_query($conn, $sql)) {
  if(!$query){
    $sql2 = " INSERT INTO user (email, password) VALUES ('$email', '$password') ";
    if (mysqli_query($conn, $sql2)) {
      echo "Registered";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  } else {
    echo 'Email already exist';
  }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn)
?>
