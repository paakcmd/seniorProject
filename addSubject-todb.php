<?php
  $course_no = $_POST['course_no'];
  $course_title = $_POST['course_no'];
  $credit = $_POST['credit'];

  $section = $_POST['section'];
  $weeks_no = $_POST['weeks_no'];

  $start_date0 = $_POST["start_date"];
  $start_date = date('Y-m-d', strtotime($start_date0));

  $end_date0 = $_POST["end_date"];
  $end_date = date('Y-m-d', strtotime($end_date0));

  $first_day = $_POST["day1"];
  $second_day = $_POST["day2"];

  $start_time1 = $_POST["start_time1"];
  $end_time1 = $_POST["end_time1"];

  $start_time2 = $_POST["start_time2"];
  $end_time2 = $_POST["end_time2"];

   $time_diff1 = strtotime($end_time1) - strtotime($start_time1);
   $duration1 = date("H:i", $time_diff1);

   $time_diff2 = strtotime($end_time1) - strtotime($start_time1);
   $duration2 = date("H:i", $time_diff1);


  function getDateForSpecificDayBetweenDates($startDate, $endDate, $weekdayNumber)
{
    $startDate = strtotime($startDate);
    $endDate = strtotime($endDate);

    $dateArr = array();

    do
    {
        if(date("w", $startDate) != $weekdayNumber)
        {
            $startDate += (24 * 3600); // add 1 day
        }
    } while(date("w", $startDate) != $weekdayNumber);


    while($startDate <= $endDate)
    {
        $dateArr[] = date('Y-m-d', $startDate);
        $startDate += (7 * 24 * 3600); // add 7 days
    }

    return($dateArr);
}

$datesforday1 = getDateForSpecificDayBetweenDates($start_date, $end_date, (int)$first_day);
$datesforday2 = getDateForSpecificDayBetweenDates($start_date, $end_date, (int)$second_day);

print "<pre>";
print_r($datesforday1);
print_r($datesforday2);




  include("connect-database.php");

  $sql = " INSERT INTO course (course_no, course_title, credit, section, weeks_no, start_date, end_date) VALUES ('$course_no', '$course_title', '$credit', $section, $weeks_no, '$start_date', '$end_date'  ) ";
  echo $sql;

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

for ($i=0; $i < count($datesforday1) ; $i++) { 
  $sqldate = " INSERT INTO teachlog (course_no, section, remark, duration, time_from, time_to, date) VALUES ('$course_no', $section, 'default', '$duration1', '$start_time1' , '$end_time1', '".$datesforday1[$i]."') ";
  if (mysqli_query($conn, $sqldate)) {
    echo "New record created successfully <br>";
  } else {
      echo "Error: " . $sqldate . "<br>" . mysqli_error($conn);
  }
}
echo "<br>";

for ($i=0; $i < count($datesforday2) ; $i++) { 
  $sqldate = " INSERT INTO teachlog (course_no, section, remark, duration, time_from, time_to, date) VALUES ('$course_no', $section, 'default', '$duration2', '$start_time2' , '$end_time2', '".$datesforday2[$i]."') ";
  if (mysqli_query($conn, $sqldate)) {
    echo "New record created successfully <br>";
  } else {
      echo "Error: " . $sqldate . "<br>" . mysqli_error($conn);
  }
}

echo "<br>";


  mysqli_close($conn);
?>

