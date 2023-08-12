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
								<th>Nom Processus </th>
								<th>Date début</th>
								<th>Date fin</th>
                                <th>Description</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							
							@foreach($Processus as $processus)
							<tr>
								<td>

									{{ $loop->iteration }}
								</td>
								<td>
								{{ $processus->nom_Processus }}
								
								</td>
								<td>{{ $processus->date_debut }}</td>
								<td>{{ $processus->date_fin }}</td>
					            <td>{{ $processus->description }}</td>
								<td>
								@if ($processus->status == 0)
                                <span class="status process">process</span>
                                     @elseif ($processus->status == 1)
									 <span class="status pending">pending</span> 
                                     @elseif ($processus->status == 2)
									<span class="status completed">Completed </span> 
                  
                                   @endif
								<td>
								
									<button class="btn btn-warning" ><i class="fa fa-pencil"></i> </button>
									<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
									<button class="btn btn-primary">
										<details>
											<a style="color: azure;" href="/Risque">Risque</a><br>
											<a style="color: azure ;" href="/Etapes">Etapes</a>
										</details>
									</button>
								</td>



							</tr>
						
							@endforeach
							
						</tbody>
					</table>
				</div>

			</div>


			<div id="myModal" class="modal">
				<div class="modalcontent">
					<div class="modal-header">
						<h2>Add Processus</h2>
						<button type="button" class="close" data-dismiss="modal" onclick="closeModal()">×</button>
					</div>
					<div class="modal-body">
						<form action="" method="post">
						@csrf
							<div class="form-group">
								<label for="id">ID</label>
								<input type="text" class="form-control" id="id" name="id">
							</div>
							<div class="form-group">
								<label for="nomprocessus">Nom processus</label>
								<input type="text" class="form-control" id="nomprocessus" name="nomprocessus">
							</div>
							<div class="form-group">
								<label for="startdate">Start Date</label>
								<input type="date" class="form-control" id="startdate" name="startdate">
							</div>
							<div class="form-group">
								<label for="enddate">End Date</label>
								<input type="date" class="form-control" id="enddate" name="enddate">
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<textarea class="form-control" id="description" name="description">
						</textarea>
							</div>
							<div class="form-group">
								<label for="status">Status</label>
								<select class="form-control" id="status" name="status">
								<option value="0">Verification</option>
                                <option value="1">Confirmed</option>
                                <option value="2">Done</option>
								</select>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
			<div id="editProcessus" class="modal">
				<div class="modalcontent">
					<div class="modal-header">
						<h2>edit Processus</h2>
						<button type="button" class="close" data-dismiss="modal" onclick="closeeditProcessus()">×</button>
					</div>
					<div class="modal-body">
						<form action="" method="post">
							<div class="form-group">
								<label for="id">ID</label>
								<input type="text" class="form-control" id="id" name="id">
							</div>
							<div class="form-group">
								<label for="nomprocessus">Nom processus</label>
								<input type="text" class="form-control" id="nomprocessus" name="nomprocessus">
							</div>
							<div class="form-group">
								<label for="startdate">Start Date</label>
								<input type="date" class="form-control" id="startdate" name="startdate">
							</div>
							<div class="form-group">
								<label for="enddate">End Date</label>
								<input type="date" class="form-control" id="enddate" name="enddate">
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<textarea class="form-control" id="description" name="description">
						</textarea>
							</div>
							<div class="form-group">
								<label for="status">Status</label>
								<select class="form-control" id="status" name="status">
									<option value="1">Active</option>
									<option value="2">Active</option>
								</select>
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
		function openeditProcessus() {
			document.getElementById("editProcessus").style.display = "block";
		}
		function closeeditProcessus() {
			document.getElementById("editProcessus").style.display = "none";
		}
	</script>
	<!-- NAVBAR -->

</body>

</html>