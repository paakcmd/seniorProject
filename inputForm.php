<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
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
    select .selectpicker {
      border-radius: none !important;
      border-top-left-radius: none !important;
      border-bottom-left-radius: none !important;
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
        <legend>Contact Us Today!</legend>

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
            <select name="state" class="form-control selectpicker" >
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
            <select name="state" class="form-control selectpicker" >
              <option value=" " >Please select your Highest Degree</option>
              <option>PhD</option>
              <option>MS</option>
              <option >BS</option>
            </select>
          </div>
        </div>
        </div>

        <!-- Text input-->
               <div class="form-group">
          <label class="col-md-12 control-label">E-Mail</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
          <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
            </div>
          </div>
        </div>


        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-12 control-label">Phone #</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-12 control-label">Address</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <input name="address" placeholder="Address" class="form-control" type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-12 control-label">City</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <input name="city" placeholder="city" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <!-- Select Basic -->

        <div class="form-group">
          <label class="col-md-12 control-label">State</label>
            <div class="col-md-12 selectContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="state" class="form-control selectpicker" >
              <option value=" " >Please select your state</option>
              <option>Alabama</option>
              <option>Alaska</option>
              <option >Arizona</option>
              <option >Arkansas</option>
              <option >California</option>
              <option >Colorado</option>
              <option >Connecticut</option>
              <option >Delaware</option>
              <option >District of Columbia</option>
              <option> Florida</option>
              <option >Georgia</option>
              <option >Hawaii</option>
              <option >daho</option>
              <option >Illinois</option>
              <option >Indiana</option>
              <option >Iowa</option>
              <option> Kansas</option>
              <option >Kentucky</option>
              <option >Louisiana</option>
              <option>Maine</option>
              <option >Maryland</option>
              <option> Mass</option>
              <option >Michigan</option>
              <option >Minnesota</option>
              <option>Mississippi</option>
              <option>Missouri</option>
              <option>Montana</option>
              <option>Nebraska</option>
              <option>Nevada</option>
              <option>New Hampshire</option>
              <option>New Jersey</option>
              <option>New Mexico</option>
              <option>New York</option>
              <option>North Carolina</option>
              <option>North Dakota</option>
              <option>Ohio</option>
              <option>Oklahoma</option>
              <option>Oregon</option>
              <option>Pennsylvania</option>
              <option>Rhode Island</option>
              <option>South Carolina</option>
              <option>South Dakota</option>
              <option>Tennessee</option>
              <option>Texas</option>
              <option> Uttah</option>
              <option>Vermont</option>
              <option>Virginia</option>
              <option >Washington</option>
              <option >West Virginia</option>
              <option>Wisconsin</option>
              <option >Wyoming</option>
            </select>
          </div>
        </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-12 control-label">Zip Code</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <input name="zip" placeholder="Zip Code" class="form-control"  type="text">
            </div>
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label">Website or domain name</label>
           <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
          <input name="website" placeholder="Website or domain name" class="form-control" type="text">
            </div>
          </div>
        </div>

        <!-- radio checks -->
         <div class="form-group">
                                <label class="col-md-12 control-label">Do you have hosting?</label>
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="hosting" value="yes" /> Yes
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="hosting" value="no" /> No
                                        </label>
                                    </div>
                                </div>
                            </div>

        <!-- Text area -->

        <div class="form-group">
          <label class="col-md-12 control-label">Project Description</label>
            <div class="col-md-12 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                	<textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
          </div>
          </div>
        </div>

        <!-- Success message -->
        <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-12 control-label"></label>
          <div class="col-md-12">
            <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
          </div>
        </div>

        </fieldset>
      </form>
    </div>

  </body>
  <script src="index.js"></script>
</html>
