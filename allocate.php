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
              <label class="col-md-12 control-label">Section</label>
                <div class="col-md-12 inputGroupContainer">
                <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input name="sections" placeholder="Sections" class="form-control"  type="number">
                </div>
              </div>
        </div>

       <div class="form-group">
          <label class="col-md-12 control-label">Employee List</label>
          <div class="col-md-12 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="emp1" placeholder="Full name" class="form-control"  type="text">
          <input  name="emp2" placeholder="Full name" class="form-control"  type="text">
          <input  name="emp3" placeholder="Full name" class="form-control"  type="text">
          <input  name="emp4" placeholder="Full name" class="form-control"  type="text">
          <input  name="emp5" placeholder="Full name" class="form-control"  type="text">
          <input  name="emp6" placeholder="Full name" class="form-control"  type="text">
          <input  name="emp7" placeholder="Full name" class="form-control"  type="text">
          <input  name="emp8" placeholder="Full name" class="form-control"  type="text">
          <input  name="emp9" placeholder="Full name" class="form-control"  type="text">
          <input  name="emp10" placeholder="Full name" class="form-control"  type="text">

            </div>
          </div>
        </div>

     


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
