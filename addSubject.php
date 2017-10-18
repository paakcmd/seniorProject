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
      <form class="well form-horizontal" action=" " method="post"  id="contact_form">
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
          <input name="course_title" placeholder="Last Name" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label">Credit</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="credit" placeholder="Last Name" class="form-control"  type="text">
            </div>
          </div>
        </div>
        <input class="btn btn-success" type="text" name="" value="submit">
        </fieldset>
      </form>
    </div>

  </body>
  <script src="index.js"></script>
</html>
