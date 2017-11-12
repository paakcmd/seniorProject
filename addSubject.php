<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
  </head>
  <style media="screen">
    .container {
      margin-top:50px;
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
          <label class="col-md-12 control-label">Credit</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="credit" placeholder="Credit" class="form-control"  type="number">
            </div>
          </div>
        </div>
			
		<div class="form-group">
          <label class="col-md-12 control-label">Number of Sections</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="credit" placeholder="Sections" class="form-control"  type="number">
            </div>
          </div>
        </div>
        <input class="btn btn-success" type="submit" name="" value="submit">
        </fieldset>
      </form>
    </div>

  </body>
  <script src="index.js"></script>
</html>
