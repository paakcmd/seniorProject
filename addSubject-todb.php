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

  function getDateForSpecificDayBetweenDates($startDate, $endDate, $weekdayNumber)
{
    // $startDate = strtotime($startDate);
    // $endDate = strtotime($endDate);

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

$dateArr = getDateForSpecificDayBetweenDates($start_date, $end_date, 0);

print "<pre>";
print_r($dateArr);




  include("connect-database.php");

  $sql = " INSERT INTO course (course_no, course_title, credit, section, weeks_no, start_date, end_date) VALUES ('$course_no', '$course_title', '$credit', $section, $weeks_no, '$start_date', '$end_date'  ) ";
  echo $sql;

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
?>

STR_TO_DATE('01/05/2010', '%m/%d/%Y')