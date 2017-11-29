<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

  </head>
  <style media="screen">
    .select-modifiedByMe{
      width: 250px !important;
    }
    .time-form{
      width:150px !important;
    }
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
      <form class="well form-horizontal" action = "makeupClass-todb.php" method="post" >
        <fieldset>

        <!-- Form Name -->
        <legend>Make Up/Cancellation</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label">Subject</label>
          <div class="col-md-8 inputGroupContainer">
          <div class="input-group">
            <select class="form-control select-modifiedByMe" name="course_no">
              <option value="None">Subject</option>
              <option value="ITS100">ITS100</option>
              <option value="ITS100">ITS101</option>
              <option value="ITS100">ITS102</option>
              <option value="ITS100">ITS103</option>
              <option value="ITS100">ITS104</option>
              <option value="ITS100">ITS105</option>
              <option value="ITS100">ITS106</option>
              <option value="ITS100">ITS107</option>
              <option value="ITS100">ITS108</option>

            </select>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Section</label>
          <div class="col-md-8 inputGroupContainer">
          <div class="input-group">
            <select class="form-control select-modifiedByMe" name="section">
              <option value="0">Section</option>
              <option value="1">Sec 1</option>
              <option value="2">Sec 2</option>
              <option value="3">Sec 3</option>
              <option value="4">Sec 4</option>
              <option value="5">Sec 5</option>
              <option value="6">Sec 6</option>
              <option value="7">Sec 7</option>
            </select>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Type</label>
          <div class="col-md-8 inputGroupContainer">
          <div class="input-group">
            <select class="form-control select-modifiedByMe" name="type">
              <option value="None">Type</option>
              <option value="makeup">Make Up</option>
              <option value="cancellation">Cancellation</option>
              <option value="absent">Absent</option>

            </select>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Name</label>
          <div class="col-md-8 inputGroupContainer">
          <div class="input-group">
            <input type="text" name="user_id" placeholder="If type is absent." class="form-control select-modifiedByMe">

            </select>
            </div>
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-4 control-label">Date</label>
          <div class="col-md-8 inputGroupContainer">
          <div class="input-group">
            <input name="start_date" type="text" id="datepicker" class="form-control select-modifiedByMe" placeholder="Date">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Time</label>
          <div class="col-md-8 inputGroupContainer">
          <div class="input-group">
            <input name="time_from" type="text" id="timepicker1" class="form-control time-form" >
            to
            <input name="time_to" type="text" id="timepicker2" class="form-control time-form" >
            </div>
          </div>
        </div>


        <input class="btn btn-success" type="submit" name="" value="Submit">
        </fieldset>
      </form>
    </div>

  </body>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
  <script>
  $(document).ready(function(){
    $('input#timepicker1').timepicker({});
  });
  $(document).ready(function(){
    $('input#timepicker2').timepicker({});
  });
  $(function() {
    $("#datepicker").datepicker();
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
  </script>
  <script src="index.js"></script>
</html>
