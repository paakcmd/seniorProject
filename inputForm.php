<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <title></title>
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
      <form class="well form-horizontal" action="inputForm-todb.php" method="post"  id="contact_form">
        <fieldset>

        <!-- Form Name -->
        <legend>New Part-Time Employee Information</legend>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-12 control-label">First Name</label>
          <div class="col-md-12 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-12 control-label" >Last Name</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label">Department</label>
            <div class="col-md-12 selectContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="department" class="form-control selectpicker" >
              <option value=" " >Please select your department</option>
              <option>Chemical Engineering</option>
              <option>Civil Engineer</option>
              <option >Common and Graduate Study</option>
              <option >Computer Engineering</option>
              <option >Electronics and Communication Engineering</option>
              <option >Engineering Management</option>
              <option >Industrial Engineering</option>
              <option >Information Technology</option>
              <option >Management Technology</option>
              <option> Mechanical Engineering</option>
            </select>
          </div>
        </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label">Highest Degree</label>
            <div class="col-md-12 selectContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="highest_degree" class="form-control selectpicker" >
              <option value=" " >Please select your Highest Degree</option>
              <option>PhD</option>
              <option>MS</option>
              <option >BS</option>
              <option >Scholarship Student</option>
              <option >Other</option>
            </select>
          </div>
        </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label">Highest Degree (if other)</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input name="highest_degree_other" class="form-control" placeholder="Highest Degree" type="text">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label">Level</label>
            <div class="col-md-12 selectContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="level" class="form-control selectpicker" >
              <option value=" " >Please select your level</option>
              <option>Undergraduate Level</option>
              <option>Graduate Level</option>

            </select>
          </div>
        </div>
        </div>

        <!-- Text input-->
               <div class="form-group">
          <label class="col-md-12 control-label">Affiliation & Address</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
          <input name="address" class="form-control" placeholder="Affiliation & Address" type="text">
            </div>
          </div>
        </div>


        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-12 control-label">Position</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input name="position" class="form-control" placeholder="Position" type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-12 control-label">Account Number</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <input name="account_number" class="form-control" placeholder="Account Number"type="text">
            </div>
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-12 control-label">Bank/Branch</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input name="bank_branch" class="form-control" placeholder="Bank/Branch"type="text">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label">Phone</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input name="phone" class="form-control" placeholder="Phone Number" type="text">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label">Mobile</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input name="mobile" class="form-control" placeholder="Mobile" type="text">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label">Fax</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input name="fax" class="form-control" placeholder="Fax" type="text">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label">Email</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input name="email" class="form-control" placeholder="abc@mno.com" type="email">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label">Home Address</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input name="home_address" class="form-control" placeholder="Home Address" type="text">
            </div>
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-12 control-label">Course No.</label>
            <div class="col-md-12 selectContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="course_no" class="form-control selectpicker" >
              <option value=" " >Please select course</option>

              <option>ITS100</option>


            </select>
          </div>
        </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label">Section</label>
            <div class="col-md-12 selectContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="section" class="form-control selectpicker" >
              <option value=" " >Please select section</option>

              <option>1</option>
              <option>2</option>
              <option>3</option>


            </select>
          </div>
        </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label">Weeks</label>
            <div class="col-md-12 selectContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="weeks" class="form-control selectpicker" >
              <option value=" " >Please select section</option>

              <option>17</option>
              <option>less than 17</option>


            </select>
          </div>
        </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label">Number of weeks (if less than 17)</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input name="no_of_weeks" class="form-control" type="text">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-12 control-label">Renumeration Rate (Baht/Hr.)</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input name="renumeration_rate" class="form-control" placeholder="Renumeration Rate" type="text">
            </div>
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-12 control-label">Traveling Expense (Baht/1 Round trip)</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input name="traveling_expense"  placeholder="Traveling Expense"class="form-control" type="text">
            </div>
          </div>
        </div>



        <!-- Text input-->



        <!-- Select Basic -->



        <!-- Success message -->


        <!-- Button -->
        <div class="form-group">
          <label class="col-md-12 control-label"></label>
          <div class="col-md-12">
            <button type="submit" class="btn btn-warning" >Add <span class="glyphicon glyphicon-send"></span></button>
          </div>
        </div>

        </fieldset>
      </form>
    </div>

  </body>
  <script src="index.js"></script>
</html>
