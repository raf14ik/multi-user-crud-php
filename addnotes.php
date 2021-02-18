<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>


<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<style>
	body{
		background-image: linear-gradient(to left, rgba(255,0,0,0), rgba(255,0,0,1));
	}
			.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>



      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<?php if ($_SESSION['role'] == 'admin') {?>
			
      		<!-- For Admin -->

      		<div class="card" style="width: 18rem;">
			  <nav class="nav justify-content-center align-items-center">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                <a class="nav-link" href="addnotes.php">Notes</a>
		      </nav>
			  <img src="img/admin-default.png" 
			       class="card-img-top" 
			       alt="admin image">
			  <div class="card-body text-center">
			    <h5 class="card-title">
			    	<?=$_SESSION['name']?>
			    </h5>
			    <a href="logout.php" class="btn btn-dark">Logout</a>
			  </div>
			</div>
			<div class="container">
	<h1 class="page-header text-center">Interface Admin</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row">
				<a href="#addnew" data-toggle="modal" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Importer Notes</a>
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID</th>
						<th>Etudiant</th>
						<th>Database</th>
						<th>Web Development </th>
						<th>GLPI</th>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM notes";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['id']."</td>
									<td>".$row['etu']."</td>
									<td>".$row['dbase']."</td>
									<td>".$row['webdev']."</td>
									<td>".$row['glpi']."</td>

								</tr>";
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>
      	<?php }else { ?>
      	<?php } ?>

      </div>
</html>
<?php }else{
	header("Location: index.php");
} ?>