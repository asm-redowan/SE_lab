<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- <title>Hello, world!</title> -->
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <!-- <a class="navbar-brand" href="#">Your Website Name</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="waiting.php">Waiting</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="showall_missing.php">Missing</a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="showall_wanted.php">Wanted</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="aproved.php">Aproved</a>
            </li>
        </ul>
        </div>
        <ul class="nav navbar-nav navbar-right">
        	<li><a class="nav-link" href="logout.php">Logout</a></li>
        </ul>
    </div>
    </nav>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--  -->

    <table id="data-table" class="table table-bordered">
		<thead>
			<!-- <tr>
				<th>Column 1</th>
				<th>Column 2</th>
				<th>Column 3</th>
				<th>Action</th>
			</tr> -->
		</thead>
		<tbody>
		</tbody>
	</table>

	<script>
		$(document).ready(function() {
			// On page load, fetch the data
			DataWanted();
		});
        
		function DataWanted() {
			$.ajax({
				url: "getall_wanted.php",
				type: "GET",
				success: function(data) {
					// Clear the table body
					$("#data-table tbody").empty();

					// Parse the JSON data
					var jsonData = JSON.parse(data);
					console.log(jsonData[0]);

					// Loop through the data and add a row for each item
					$.each(jsonData, function(index, item) {
						var row = "<tr>" +
							"<td>" + jsonData[index].name + "</td>" +
							"<td>" + jsonData[index].details + "</td>" +
							// "<td>" + jsonData[index].manager_id + "</td>" +
							// "<td><button class='edit-btn btn btn-primary' data-id='" + jsonData[index].department_id + "'>Aprove</button></td>" +
							"</tr>";
						$("#data-table tbody").append(row);
					});

					
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(textStatus, errorThrown);
				}
			});
		}
		

	</script>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  </body>
</html>