<!DOCTYPE html>
<html lang="en"> 

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('cssfile/style.css')}}">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>OPP</title>

</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bs-smile'><img src="{{ asset('imgfile/logo.png') }}" width="40px"></i>
			<span class="text">Production </span>
		</a>
		<ul class="side-menu top">
			<!--<li>
				<a href="dashboard.html">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>-->
			<li class="active">
				<a href="production.html">
					<i class='bx bxs-shopping-bag-alt'></i>
					<span class="text">Processus</span>
				</a>
			</li>

			<li>
				<a href="etape.html">
					<i class='bx bxs-group'></i>
					<span class="text">Equipe</span>
				</a>
			</li>
			<li>
				<a href="">
					<i class='bx bxs-group'></i>
					<span class="text">Ressource</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog'></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>

			
		</nav>
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Production</a>
						</li>
					</ul>

				</div>

			</div>



			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Production</h3>

						<BUtton class="btn btn-primary" onclick="openModal()">Ajouter</BUtton>
					</div>
					<table id="myTable">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nom Ressource </th>
								<th>Type Ressource </th>
								<th>Capacite max </th>
                                <th>Maintenance</th>
                               
							
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>

									1
								</td>
								<td>

									R1
								</td>
								<td>
                                  30
								</td>

								<td>machine</td>
                                <td><a href="" class="btn btn-warning">Voir</a></td>
								<td>
									<button class="btn btn-warning" onclick="openeditRessource()"  ><i class="fa fa-pencil"></i> </button>
									<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
									
								</td>



							</tr>
				
							
							
						</tbody>
					</table>
				</div>

			</div>


			<div id="myModal" class="modal">
				<div class="modalcontent">
					<div class="modal-header">
						<h2>Add Ressource</h2>
						<button type="button" class="close" data-dismiss="modal" onclick="closeModal()">×</button>
					</div>
					<div class="modal-body">
						<form action="insert.php" method="post">
							<div class="form-group">
								<label for="id">ID</label>
								<input type="text" class="form-control" id="id" name="id">
							</div>
							<div class="form-group">
								<label for="nompRessource">Nom Ressource</label>
								<input type="text" class="form-control" id="nompRessource" name="nomRessource">
							</div>
							<div class="form-group">
								<label for="typeRessource">Type Ressource</label>
								<input type="text" class="form-control" id="typeRessource" name="typeRessource">
							</div>
							<div class="form-group">
								<label for="Capacite">Capacite max</label>
								<input type="text" class="form-control" id="Capacite" name="Capacite">
							</div>
							
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
			<div id="editProcessus" class="modal">
				<div class="modalcontent">
					<div class="modal-header">
						<h2>edit Ressource</h2>
						<button type="button" class="close" data-dismiss="modal" onclick="closeeditRessource()">×</button>
					</div>
					<div class="modal-body">
						<form action="insert.php" method="post">
							<div class="form-group">
								<label for="id">ID</label>
								<input type="text" class="form-control" id="id" name="id">
							</div>
							<div class="form-group">
								<label for="nompRessource">Nom Ressource</label>
								<input type="text" class="form-control" id="nompRessource" name="nomRessource">
							</div>
							<div class="form-group">
								<label for="typeRessource">Type Ressource</label>
								<input type="text" class="form-control" id="typeRessource" name="typeRessource">
							</div>
							<div class="form-group">
								<label for="Capacite">Capacite max</label>
								<input type="text" class="form-control" id="Capacite" name="Capacite">
							</div>
							
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>


		</main>



	</section>
	<!-- Include necessary scripts -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
	<!--bootstrap links-->


	<script>
		$(document).ready(function () {
			$('#myTable').DataTable({
				dom: 'Bfrtip', // Buttons configuration
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				],

			});

		});
		function openModal() {
			document.getElementById("myModal").style.display = "block";
		}
		function closeModal() {
			document.getElementById("myModal").style.display = "none";
		}
		function openeditRessource() {
			document.getElementById("editProcessus").style.display = "block";
		}
		function closeeditRessource() {
			document.getElementById("editProcessus").style.display = "none";
		}
	</script>
	<!-- NAVBAR -->

</body>

</html>