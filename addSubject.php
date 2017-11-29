<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
  </head>
  <style media="screen">
    .container {
      margin-left: auto;
      margin-right: auto;
      display: block;
      max-width: 600px;
    }
    .form-horizontal .control-label {
      text-align: left !important;
    }
    legend {
      margin-bottom: 30px;
    }
  </style>
  <body>
    <?php include('navbar.php'); ?>
    <div class="container">
      <form class="well form-horizontal" action = "addSubject-todb.php" method="post" >
        <fieldset>

        <!-- Form Name -->
        <legend>Add subject</legend>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-12 control-label">Course No.</label>
          <div class="col-md-12 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="course_no" placeholder="Course Number" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-12 control-label" >Course Title</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="course_title" placeholder="Course Title" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label">Credits</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="credit" placeholder="Credits" class="form-control"  type="number">
            </div>
          </div>
        </div>

    		<div class="form-group">
              <label class="col-md-12 control-label">Section</label>
                <div class="col-md-12 inputGroupContainer">
                <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input name="section" placeholder="Sections" class="form-control"  type="number">
                </div>
              </div>
        </div>
        <div class="form-group">
              <label class="col-md-12 control-label">Number of Weeks</label>
                <div class="col-md-12 inputGroupContainer">
                <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input name="weeks_no" placeholder="Number of weeks" class="form-control"  type="number">
                </div>
              </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label">Start Date</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="start_date" type="text" id="datepicker" class="form-control select-modifiedByMe">
            </div>
            </div>
          </div>


        <div class="form-group">
          <label class="col-md-12 control-label">End Date</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
           <input name="end_date" type="text" id="datepicker2" class="form-control select-modifiedByMe">
            </div>
          </div>
        </div>
        <hr>
        <div class="form-group">
          <label class="col-md-12 control-label">Day 1 </label>
            <div class="col-md-12 selectContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="day1" class="form-control selectpicker" >
              <option value=" " >Please select day</option>
              <option>Monday</option>
              <option>Tuesday</option>
              <option >Wednesday</option>
              <option >Thursday</option>
              <option >Friday</option>
              <option >Saturday</option>
              <option >Sunday</option>

            </select>
          </div>
        </div>
        </div>

         <div class="form-group">
          <label class="col-md-4 control-label">Time 1</label>
          <div class="col-md-8 inputGroupContainer">
          <div class="input-group">
            <input type="text" id="timepicker1" class="form-control time-form" name="start_time1">
            to
            <input type="text" id="timepicker2" class="form-control time-form" name="end_time1">
            </div>
          </div>
        </div>
        <hr>

        <div class="form-group">
          <label class="col-md-12 control-label">Day 2 </label>
            <div class="col-md-12 selectContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="day2" class="form-control selectpicker" >
              <option value=" " >Please select day</option>
              <option>Monday</option>
              <option>Tuesday</option>
              <option >Wednesday</option>
              <option >Thursday</option>
              <option >Friday</option>
              <option >Saturday</option>
              <option >Sunday</option>

            </select>
          </div>
        </div>
        </div>

         <div class="form-group">
          <label class="col-md-4 control-label">Time 2</label>
          <div class="col-md-8 inputGroupContainer">
          <div class="input-group">
            <input type="text" id="timepicker3" class="form-control time-form" name="start_time2">
            to
            <input type="text" id="timepicker4" class="form-control time-form" name="end_time2">
            </div>
          </div>
        </div>
        <hr>

        <input class="btn btn-success" type="submit" name="" value="submit">
        </fieldset>
      </form>
    </div>



  </body>
  <script src="index.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
  <script>
  $(function() {
    $("#datepicker").datepicker();
  });

  $(function() {
    $("#datepicker2").datepicker();
  });


  $(document).ready(function(){
    $('input#timepicker1').timepicker({});
  });
  $(document).ready(function(){
    $('input#timepicker2').timepicker({});
  });

   $(document).ready(function(){
    $('input#timepicker3').timepicker({});
  });
  $(document).ready(function(){
    $('input#timepicker4').timepicker({});
  });

  $('#timepicker1').timepicker({
    timeFormat: 'h:mm p',
    interval: 20,
    minTime: '9.00am',
    maxTime: '8:00pm',
    defaultTime: '9.00',
    startTime: '9.00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});
$('#timepicker2').timepicker({
    timeFormat: 'h:mm p',
    interval: 20,
    minTime: '9.00am',
    maxTime: '8:00pm',
    defaultTime: '9.00',
    startTime: '9.00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});

  $('#timepicker3').timepicker({
    timeFormat: 'h:mm p',
    interval: 20,
    minTime: '9.00am',
    maxTime: '8:00pm',
    defaultTime: '9.00',
    startTime: '9.00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});
$('#timepicker4').timepicker({
    timeFormat: 'h:mm p',
    interval: 20,
    minTime: '9.00am',
    maxTime: '8:00pm',
    defaultTime: '9.00',
    startTime: '9.00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});
  </script>
</html>
