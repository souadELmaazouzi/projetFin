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
           <!-- <li  class="active">
				<a href="dashboard.html">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>-->
			<li class="active" >
				<a href="production.html">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Processus</span>
				</a>
			</li>
		
		
			<li>
				<a href="etape.html">
					<i class='bx bxs-group' ></i>
					<span class="text">Equipe</span>
				</a>
			</li>
			<li>
				<a href="">
					<i class='bx bxs-group' ></i>
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
           




            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Details de Processus  no 1 </h3>

                        <BUtton class="btn btn-primary" id="po" onclick="openModal()" >Ajouter</BUtton>
                    </div>
                    <table id="myTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom Processus </th>
                                <th>Nom Etape </th>
                                <th>equipe</th>
                                <th>Ressource</th>
                                <th>Description</th>
                                <th>Duree estimee</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                  1
                                </td>
                                <td>

                                    <p>Processus 1</p>
                                </td>
                                <td>

                                    <p>etape 1</p>
                                </td>
                                <td> <p>equipe 1</p></td>
                                <td> <p>Ressource 1</p></td>
                                <td>Description 1</td>
                                <td>30</td>
                                <td><span class="status pending">pending</span></td>
                                <td>
                                    <button class="btn btn-warning"  onclick="openeditEtape()"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    <button class="btn btn-primary" id="openPopupBtn"><i class="fa fa-eye"></i></button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            
            </div>

            <div id="myModal" class="modal">
				<div class="modalcontent">
					<div class="modal-header">
						<h2>Ajouter Etape </h2>
						<button type="button" class="close" data-dismiss="modal" onclick="closeModal()">×</button>
					</div>
					<div class="modal-body">
					<form action="insert.php" method="post">
							<div class="form-group">
								
								<input type="text" class="form-control" id="id" name="id" placeholder='ID'>
							</div>
							<div class="form-group">
							
								<input type="text" class="form-control" id="nomprocessus" name="nomprocessus" placeholder='Nom processus'>
							</div>
                            <div class="form-group">
								
								<input type="text" class="form-control" id="NomEtape" name="NomEtape" placeholder='Nom Etape'>
							</div>
							<div class="form-group">
                            <label for="Equipe">Equipe</label>
                            <select class="form-control" id="Equipe" name="Equipe" >
									<option value="1">Active</option>
									<option value="2">Active</option>
								</select>
							</div>
                            <div class="form-group">
                            <label for="Equipe">Ressource</label>
                            <select class="form-control" id="Ressource" name="Ressource" >
									<option value="1">Active</option>
									<option value="2">Active</option>
								</select>
							</div>
							
							<div class="form-group">
								<label for="description">Description</label>
								<textarea class="form-control" id="description" name="description">
						</textarea>
							</div>
                            <div class="form-group">
								<label for="enddate">Duree estimee</label>
								<input type="number" class="form-control" id="Dureeestimee" name="Dureeestimee">
							</div>
							<div class="form-group">
								<label for="status">Status</label>
								<select class="form-control" id="status" name="status">
									<option value="1">Active</option>
									<option value="2">Active</option>
								</select>
							</div>
							<button type="submit" class="btn btn-primary">MODIFIER</button>
						</form>
					</div>
				</div>
			</div>
			<div id="editEtape" class="modal">
            <div class="modalcontent">
					<div class="modal-header">
						<h2>Modifier Etape</h2>
						<button type="button" class="close" data-dismiss="modal" onclick="closeeditEtape()">×</button>
					</div>
					<div class="modal-body">
						<form action="insert.php" method="post">
							<div class="form-group">
								
								<input type="text" class="form-control" id="id" name="id" placeholder='ID'>
							</div>
							<div class="form-group">
							
								<input type="text" class="form-control" id="nomprocessus" name="nomprocessus" placeholder='Nom processus'>
							</div>
                            <div class="form-group">
								
								<input type="text" class="form-control" id="NomEtape" name="NomEtape" placeholder='Nom Etape'>
							</div>
							<div class="form-group">
                            <label for="Equipe">Equipe</label>
                            <select class="form-control" id="Equipe" name="Equipe" >
									<option value="1">Active</option>
									<option value="2">Active</option>
								</select>
							</div>
                            <div class="form-group">
                            <label for="Equipe">Ressource</label>
                            <select class="form-control" id="Ressource" name="Ressource" >
									<option value="1">Active</option>
									<option value="2">Active</option>
								</select>
							</div>
							
							<div class="form-group">
								<label for="description">Description</label>
								<textarea class="form-control" id="description" name="description">
						</textarea>
							</div>
                            <div class="form-group">
								<label for="enddate">Duree estimee</label>
								<input type="number" class="form-control" id="Dureeestimee" name="Dureeestimee">
							</div>
							<div class="form-group">
								<label for="status">Status</label>
								<select class="form-control" id="status" name="status">
									<option value="1">Active</option>
									<option value="2">Active</option>
								</select>
							</div>
							<button type="submit" class="btn btn-primary">MODIFIER</button>
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
 // TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})
// Function to open the insert popup

// Function to handle form submission and add new row to the table
document.getElementById("insertForm").addEventListener("submit", function (event) {
    event.preventDefault();
    const nomProcessus = document.getElementById("nomProcessus").value;
    const nomEtape = document.getElementById("nomEtape").value;
    // Get other input values and add them to the table row as needed
    const newRow = document.createElement("tr");
    newRow.innerHTML = `
        <td></td>
        <td>${nomProcessus}</td>
        <td>${nomEtape}</td>
        <!-- Add other table data cells here -->
        <td><button>Edit</button></td>
    `;
    document.querySelector("#data-table tbody").appendChild(newRow);
    closeInsertPopup();
});
function openModal() {
			document.getElementById("myModal").style.display = "block";
		}
		function closeModal() {
			document.getElementById("myModal").style.display = "none";
		}
		function openeditEtape() {
			document.getElementById("editEtape").style.display = "block";
		}
		function closeeditEtape() {
			document.getElementById("editEtape").style.display = "none";
		}

    </script>
    <!-- NAVBAR -->
     <script src="../script.js"></script>
</body>

</html>