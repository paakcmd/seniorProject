<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
        <legend>Allocate Emplyees</legend>

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
          <div class="ui-widget">
            <input  onkeypress="Search()" id="asdf" placeholder="Full name" class="form-control profName"  type="text">
            <input  onkeypress="Search()" name="emp2" placeholder="Full name" class="form-control profName"  type="text">
            <input  onkeypress="Search()" name="emp3" placeholder="Full name" class="form-control profName"  type="text">
            <input  onkeypress="Search()" name="emp4" placeholder="Full name" class="form-control profName"  type="text">
            <input  onkeypress="Search()" name="emp5" placeholder="Full name" class="form-control profName"  type="text">
            <input  onkeypress="Search()"name="emp6" placeholder="Full name" class="form-control profName"  type="text">
            <input  onkeypress="Search()" name="emp7" placeholder="Full name" class="form-control profName"  type="text">
            <input  onkeypress="Search()"name="emp8" placeholder="Full name" class="form-control profName"  type="text">
            <input  onkeypress="Search()" name="emp9" placeholder="Full name" class="form-control profName"  type="text">
            <input  onkeypress="Search()" name="emp10" placeholder="Full name" class="form-control profName"  type="text">
          </div>

            </div>
          </div>
        </div>
        <input class="btn btn-success" type="submit" name="" value="submit">
        </fieldset>
      </form>
    </div>



  </body>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="index.js"></script>
  <script>
    function Search(term){
      $(".profName").autocomplete({
          source: 'profLiveSearch.php'
      });
    }
  </script>


  </script>
</html>
