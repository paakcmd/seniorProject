<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<script
src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous"></script>
<style media="screen">
/*
Code snippet by maridlcrmn for Bootsnipp.com
Follow me on Twitter @maridlcrmn
*/
.navbar-container { width:70%; margin-left: 15%;}
.navbar-brand { position: relative; z-index: 2; }

.navbar-nav.navbar-right .btn { position: relative; z-index: 2; padding: 4px 20px; margin: 10px auto; transition: transform 0.3s; }

.navbar .navbar-collapse { position: relative; overflow: hidden !important; }
.navbar .navbar-collapse .navbar-right > li:last-child { padding-left: 22px; }

.navbar .nav-collapse { position: absolute; z-index: 1; top: 0; left: 0; right: 0; bottom: 0; margin: 0; padding-right: 120px; padding-left: 80px; width: 100%; }
.navbar.navbar-default .nav-collapse { background-color: #f8f8f8; }
.navbar.navbar-inverse .nav-collapse { background-color: #222; }
.navbar .nav-collapse .navbar-form { border-width: 0; box-shadow: none; }
.nav-collapse>li { float: right; }

.btn.btn-circle { border-radius: 50px; }
.btn.btn-outline { background-color: transparent; }

.navbar-nav.navbar-right .btn:not(.collapsed) {
  background-color: rgb(111, 84, 153);
  border-color: rgb(111, 84, 153);
  color: rgb(255, 255, 255);
}

.navbar.navbar-default .nav-collapse,
.navbar.navbar-inverse .nav-collapse {
  height: auto !important;
  transition: transform 0.3s;
  transform: translate(0px,-50px);
}
.navbar.navbar-default .nav-collapse.in,
.navbar.navbar-inverse .nav-collapse.in {
  transform: translate(0px,0px);
}


@media screen and (max-width: 767px) {
  .navbar .navbar-collapse .navbar-right > li:last-child { padding-left: 15px; padding-right: 15px; }

  .navbar .nav-collapse { margin: 7.5px auto; padding: 0; }
  .navbar .nav-collapse .navbar-form { margin: 0; }
  .nav-collapse>li { float: none; }

  .navbar.navbar-default .nav-collapse,
  .navbar.navbar-inverse .nav-collapse {
      transform: translate(-100%,0px);
  }
  .navbar.navbar-default .nav-collapse.in,
  .navbar.navbar-inverse .nav-collapse.in {
      transform: translate(0px,0px);
  }

  .navbar.navbar-default .nav-collapse.slide-down,
  .navbar.navbar-inverse .nav-collapse.slide-down {
      transform: translate(0px,-100%);
  }
  .navbar.navbar-default .nav-collapse.in.slide-down,
  .navbar.navbar-inverse .nav-collapse.in.slide-down {
      transform: translate(0px,0px);
  }
}
</style>
<nav class="navbar navbar-default">
      <div class="navbar-container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-2">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./inputForm.php">Add Professors/Ta</a></li>
            <li><a href="./addSubject.php">Add Subject</a></li>
            <li><a href="./cancelClass.php">Cancel class</a></li>
            <li><a href="./makeupClass.php">Make up class</a></li>

            <li>
              <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="./authentication.php" aria-expanded="false" aria-controls="nav-collapse2">Sign in</a>
            </li>
          </ul>
          <div class="collapse nav navbar-nav nav-collapse slide-down" id="nav-collapse2">
            <form class="navbar-form navbar-right form-inline" role="form">
              <div class="form-group">
                <label class="sr-only" for="Email">Email</label>
                <input type="email" class="form-control" id="Email" placeholder="Email" autofocus required />
              </div>
              <div class="form-group">
                <label class="sr-only" for="Password">Password</label>
                <input type="password" class="form-control" id="Password" placeholder="Password" required />
              </div>
              <button type="submit" class="btn btn-success">Sign in</button>
            </form>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
