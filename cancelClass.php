<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  </head>
  <style media="screen">
  .select-modifiedByMe{
    width: 250px !important;
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
      <form class="well form-horizontal" action = "addSubject-todb.php" method="post" >
        <fieldset>

        <!-- Form Name -->
        <legend>Cancel Class</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label">Subject</label>
          <div class="col-md-8 inputGroupContainer">
          <div class="input-group">
            <select class="form-control select-modifiedByMe" name="">
              <option value="">Subject</option>
              <option value="">ITS100</option>
              <option value="">ITS101</option>
              <option value="">ITS102</option>
              <option value="">ITS103</option>
              <option value="">ITS104</option>
              <option value="">ITS105</option>
              <option value="">ITS106</option>
              <option value="">ITS107</option>
              <option value="">ITS108</option>

            </select>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Section</label>
          <div class="col-md-8 inputGroupContainer">
          <div class="input-group">
            <select class="form-control select-modifiedByMe" name="">
              <option value="">Section</option>
              <option value="">Sec 1</option>
              <option value="">Sec 2</option>
              <option value="">Sec 3</option>
              <option value="">Sec 4</option>
              <option value="">Sec 5</option>
              <option value="">Sec 6</option>
              <option value="">Sec 7</option>
            </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Date</label>
          <div class="col-md-8 inputGroupContainer">
          <div class="input-group">
            <input type="text" id="datepicker" class="form-control select-modifiedByMe">
            </div>
          </div>
        </div>


        <input class="btn btn-success" type="submit" name="" value="Submit">
        </fieldset>
      </form>
    </div>

  </body>
  <script src="index.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $(function() {
    $("#datepicker").datepicker();
  });
  </script>
</html>
