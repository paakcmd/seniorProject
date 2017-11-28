<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
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
		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

	<table id="myTable">
	  <tr class="header">
		<th style="width:60%;">Name</th>
		<th style="width:40%;">Course</th>

		  <th style="width:40%;">Contract</th>
		  <th style="width:40%;">Timetable</th>
		  <th style="width:40%;"></th>
	  </tr>
		
	  <?php
		$names = array("James Gordon", "Justin Bieber", "Selena Gomez", "Gigi Hadid","Taylor Swift","John Mayer","Harry Styles","John Lennon");
		$i;
		for( $i=0 ; $i< 8 ; $i++ ){ ?>
	  <tr>
		<td><?php echo $names[$i] ?></td>
		<td>ITS100</td>


		 <td class="centerCell"> <a href="createPDF.php" ><span class="glyphicon glyphicon-download-alt"></span></a></td>
		 <td>
		 	<select name="department" class="form-control selectpicker" >
              <option value=" " >Month</option>
              <option>January</option>
              <option>February</option>
              <option >March</option>
              <option >April</option>
              <option >May</option>
              <option >June</option>
              <option >July</option>
              <option >August</option>
              <option >September</option>
              <option> October</option>
              <option> November</option>
              <option> December</option>
              
            </select>

		 </td>
		 <td class="centerCell"> <a href="#" ><span class="glyphicon glyphicon-download-alt"></span></a></td>
	  </tr>
	 
		
		<?php } ?>
	</table>

	</div>
  </body>
	<script>
		function myFunction() {
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
</script>
  <script src="index.js"></script>
	
</html>
