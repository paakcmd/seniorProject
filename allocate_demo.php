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

       #myInput {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
    }

     #myInput0 {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
    }


  #myTable {
    border-collapse: collapse; /* Collapse borders */
    width: 100%; /* Full-width */
    border: 1px solid #ddd; /* Add a grey border */
    font-size: 18px; /* Increase font-size */
  }

  #myTable th, #myTable td {
    text-align: left; /* Left-align text */
    padding: 12px; /* Add padding */
  }

  #myTable tr {
    /* Add a bottom border to all table rows */
    border-bottom: 1px solid #ddd; 
  }

  #myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #f1f1f1;
  }
    
  .centerCell { margin: 0px auto;
          align-content: center}
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

      

     


        <input class="btn btn-success" type="submit" name="" value="submit">
        </fieldset>
      </form>


    </div>

     <div class="container">
      <input type="text" id="myInput0" placeholder="Names">
    <input type="text" id="myInput" onkeyup="search()" placeholder="Search for names..">

  <table id="myTable">
    <tr class="header">
    <th style="width:60%;">Name</th>
    <th style="width:40%;">Select</th>


    </tr>
    
    <?php
    $names = array("James Gordon", "Justin Bieber", "Selena Gomez", "Gigi Hadid","Taylor Swift","John Mayer","Harry Styles","John Lennon");
    $i;
    for( $i=0 ; $i< 8 ; $i++ ){ ?>
    <tr>
    <td><?php echo $names[$i] ?></td>
    <td class="centerCell"> <a class="must" href="#"><span class="glyphicon glyphicon-arrow-up"></span></a></td>



     
    </tr>
   
    
    <?php } ?>
  </table>

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

function search() {
      // Declare variables 
      var input, filter, table, tr, td, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
        } else {
        tr[i].style.display = "none";
        }
      } 
      }
    }

     $("a.must").click(
      function(e) {
        console.log("IN");
           e.preventDefault();
           $(this).attr("href"); //do something with this
           console.log($(this)[0].parentElement.parentElement.firstElementChild.textContent);

           


      }
 );


  </script>
</html>
