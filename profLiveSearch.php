<?php
include("connect-database.php");

$searchTerm = $_GET['term'];

    //get matched data from skills table
    $query = mysqli_query($conn,"SELECT * FROM `user_info` WHERE first_name LIKE '%".$searchTerm."%' OR last_name LIKE '%".$searchTerm."%' ORDER BY first_name ASC");
    while($row = mysqli_fetch_assoc($query)) {
        $data[] = $row['first_name']." ".$row['last_name'];
    }

    //return json data
    echo json_encode($data);

?>
