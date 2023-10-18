<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: Admin-Login.php");
    die();
}
include('Connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>ADMIN ADMISSION</title>
	<style>
	*{
    	padding: 0;
    	margin: 0;
    	box-sizing: border-box;
    	font-family: 'Poppins', sans-serif;
	}
	header{
    	background-color: rgb(20, 160, 110);
    	color: white;
    	padding: 0px 10px 7px 10px;
    	display: flex;
    	position: sticky;
    	top: 0;
    	left: 0;
    	z-index: 1000;
	}
	.logo{
    	width: 5%;
	}
	.logo img{
    	width: 100%;
    	height: 70px;
    	object-fit: cover;
	}
	.name h1{
    	margin-left: 130px;
		font-size: 32px;
		font-weight: bold;
	}
	nav{
    	background-color: rgb(40, 45, 50);
    	text-align: center;
    	position: sticky;
    	top: 77px;
    	left: 0;
    	z-index: 1000;
	}
	nav ul li{
    	display: inline-block;
    	background-color: rgb(40, 45, 50);
    	position: relative;
	}
	nav ul li a{
    	color: white;
		font-size: 16px;
    	padding: 11px 15px;
    	display: block;
	}
	nav ul li a:hover{
		color: white;
    	background-color: rgb(20, 160, 110);
		text-decoration-line: none;
    	transition: all 0.5s;
	}
	nav ul ul{
    	display: none;
    	position: absolute;
	}
	nav ul li:hover > ul{
    	display: block;
	}
	nav ul ul li{
    	width: 160px;
	}
	nav .click{
    	background-color: rgb(20, 160, 110);
	}
	.myhead p{
    	background: linear-gradient(109.6deg, rgb(36, 45, 57) 11.2%, rgb(16, 37, 60) 51.2%, rgb(0, 0, 0) 98.6%);
    	color: white;
    	padding: 5px;
    	margin: 30px;
    	font-size: 25px;
    	border-radius: 5px;
    	text-align: center;
    	letter-spacing: 2px;
	}
	</style>
</head>
<body>

	<header>
        <div class="logo">
            <img src="Folder/Logo.png">
        </div>
        <div class="name">
            <h1>GOVERNMENT HIGHER SECONDARY SCHOOL DOKADA BUNER</h1>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="#"><i class="fa-solid fa-house"></i> Home</a>
                <ul>
                    <li><a href="Admin-Principal.php">Principal Image</a></li>
                    <li><a href="Admin-Marquee.php">Marquee News</a></li>
                </ul>
            </li>
            <li><a href="Admin-About.php"><i class="fa-solid fa-address-card"></i> About Us</a></li>
            <li><a href="Admin-Gallery.php"><i class="fa-solid fa-image"></i> Gallery</a></li>
            <li><a href="Admin-Teachers.php"><i class="fa-solid fa-book-open-reader"></i> Teachers</a></li>
            <li><a href="#"><i class="fa-solid fa-calendar"></i> Events</a></li>
            <li><a href="#"><i class="fa-solid fa-bell"></i> News</a>
                <ul>
                    <li><a href="Admin-News.php">Message News</a></li>
                    <li><a href="Admin-Document.php">Document Files</a></li>
                </ul>
            </li>
            <li class="click"><a href="#"><i class="fa-solid fa-file-pen"></i> Admission</a>
                <ul>
                    <li><a href="#">Admission Rules</a></li>
                    <li><a href="#">Fee Structure</a></li>
                    <li><a href="Admin-Admission.php">Apply Now</a></li>
                </ul>
            </li>
            <li><a href="Admin-Contact.php"><i class="fa-solid fa-message"></i> Contact Us</a></li>
            <li><a href="Admin-Logout.php"><i class="fa-solid fa-user"></i> Logout</a></li>
        </ul>
    </nav>

	<div class="myhead">
        <p>ADMISSION RECORDS</p>
    </div>

	<div class="container" style="width: 97%; margin: 30px auto;">
		<table class="table table-bordered table-striped table-hover" id="myTable">
			<thead>
				<tr>
			   		<th class="text-center" scope="col">SERIAL NO</th>
					<th class="text-center" scope="col">STUDENT NAME</th>
					<th class="text-center" scope="col">FATHER NAME</th>
					<th class="text-center" scope="col">PHONE</th>
					<th class="text-center" scope="col">EMAIL</th>
					<th class="text-center" scope="col">VIEW</th>
					<th class="text-center" scope="col">EDIT</th>
					<th class="text-center" scope="col">DELETE</th>
				</tr>
			</thead>

			<?php
        	$get_data = "SELECT * FROM admission ORDER BY 1 DESC";
        	$run_data = mysqli_query($conn, $get_data);
			$i = 0;
        	while($row = mysqli_fetch_array($run_data)) {
				$sl = ++$i;
				$id = $row['id'];
				$sname = $row['student_name'];
				$fname = $row['father_name'];
				$smobile = $row['student_mobile'];
				$email = $row['email'];
        		echo "
				<tr>
					<td class='text-center'>$sl</td>
					<td class='text-left'>$sname</td>
					<td class='text-left'>$fname</td>
					<td class='text-left'>$smobile</td>
					<td class='text-left'>$email</td>
					<td class='text-center'>
						<span>
							<a href='#' class='btn btn-success mr-3 viewuser' data-toggle='modal' data-target='#view$id' title='Profile'>
							<i class='fa fa-address-card-o' aria-hidden='true'></i></a>
						</span>
					</td>
					<td class='text-center'>
						<span>
							<a href='#' class='btn btn-warning mr-3 edituser' data-toggle='modal' data-target='#edit$id' title='Edit'>
							<i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
						</span>
					</td>
					<td class='text-center'>
						<span>
							<a href='#' class='btn btn-danger mr-3 deleteuser' data-toggle='modal' data-target='#delete$id' title='Delete'>
							<i class='fa fa-trash-o' aria-hidden='true'></i></a>
						</span>
					</td>
				</tr>";
        	}
        	?>
		</table>
		<form action="Admission-Export.php" method="post">
    		<input type="submit" name="export" class="btn btn-success" value="Export Data"/>
			<a href="Admission-Verify.php" class="btn btn-success">Student Verify</a>
    	</form>
	</div>

<!------------------------------ DELETE DATA ------------------------------>

	<?php
	$get_data = "SELECT * FROM admission";
	$run_data = mysqli_query($conn, $get_data);
	while($row = mysqli_fetch_array($run_data)) {
		$id = $row['id'];
		echo "
		<div id='delete$id' class='modal fade' role='dialog'>
  			<div class='modal-dialog'>
    			<div class='modal-content'>
      				<div class='modal-header'>
        				<button type='button' class='close' data-dismiss='modal'>&times;</button>
        				<h4 class='modal-title text-center'>Are You Sure You Want to Delete this Record ?</h4>
      				</div>
      				<div class='modal-body'>
        				<a href='Admission-Delete.php?id=$id' class='btn btn-danger' style='margin-left:250px'>Delete</a>
      				</div>
    			</div>
  			</div>
		</div>";
	}
	?>

<!------------------------------ VIEW DATA ------------------------------>

	<?php
	$get_data = "SELECT * FROM admission";
	$run_data = mysqli_query($conn, $get_data);
	while($row = mysqli_fetch_array($run_data)) {
		$id = $row['id'];
		echo "
		<div id='view$id' class='modal fade' role='dialog' tabindex='-1' aria-labelledby='userViewModalLabel' aria-hidden='true'>
			<div class='modal-dialog'>
				<div class='modal-content'>
					<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal'>&times;</button>
						<h4 class='modal-title text-center'>STUDENT PROFILE</h4>
			 		</div>
					<div class='modal-body'>
						<div class='container' id='viewuser'>
							<div class='row'>
								<div class='col-sm-4 col-md-2'>
									<img src='$row[profile_image]' style='width: 150px; height: 200px; object-fit: cover;'> <br><br>
									<img src='$row[feeslip_image]' style='width: 150px; height: 200px; object-fit: cover;'>
								</div>
								<div class='col-sm-3 col-md-4'>
									<strong>Student Name : </strong> $row[student_name] <br>
									<strong>Student CNIC : </strong> $row[student_cnic] <br>
									<strong>Student Mobile : </strong> $row[student_mobile] <br>
									<strong>Father Name : </strong> $row[father_name] <br>
									<strong>Father CNIC : </strong> $row[father_cnic] <br>
									<strong>Father Mobile : </strong> $row[father_mobile] <br>
									<strong>Gender : </strong> $row[gender] <br>
									<strong>Date Of Birth : </strong> $row[date_birth] <br>
									<strong>Blood Group : </strong> $row[blood_group] <br>
									<strong>Home Address : </strong> $row[home_address] <br>
									<strong>Email : </strong> $row[email] <br>
									<strong>Religion : </strong> $row[religion] <br>
									<strong>School & Board : </strong> $row[school_board] <br>
									<strong>Roll Number : </strong> $row[roll_number] <br>
									<strong>Passing Year : </strong> $row[passing_year] <br>
									<strong>Total Marks : </strong> $row[total_marks] <br>
									<strong>Obatined Marks : </strong> $row[obtained_marks] <br>
									<strong>Percentage : </strong> $row[percentage] <br>
									<strong>Grade : </strong> $row[grade] <br>
									<strong>Group : </strong> $row[groups] <br>
									<strong>Session : </strong> $row[session] <br>
								</div>
							</div>
						</div>
					</div>
					<div class='modal-footer'>
						<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
					</div>
				</div>
			</div>
		</div>";
	}
	?>

<!------------------------------ EDIT DATA ------------------------------>

	<?php
	$get_data = "SELECT * FROM admission";
	$run_data = mysqli_query($conn, $get_data);
	while($row = mysqli_fetch_array($run_data)) {
		$id = $row['id'];
		$sname = $row['student_name'];
		$scnic = $row['student_cnic'];
		$smobile = $row['student_mobile'];
		$fname = $row['father_name'];
		$fcnic = $row['father_cnic'];
		$fmobile = $row['father_mobile'];
		$gender = $row['gender'];
		$birth = $row['date_birth'];
		$blood = $row['blood_group'];
		$home = $row['home_address'];
		$email = $row['email'];
		$religion = $row['religion'];
		$school = $row['school_board'];
		$rollno = $row['roll_number'];
		$year = $row['passing_year'];
		$tmarks = $row['total_marks'];
		$omarks = $row['obtained_marks'];
		$percent = $row['percentage'];
		$grade = $row['grade'];
		$group = $row['groups'];
		echo "
		<div id='edit$id' class='modal fade' role='dialog' tabindex='-1' aria-labelledby='userEditModalLabel' aria-hidden='true'>
  			<div class='modal-dialog'>
    			<div class='modal-content'>
      				<div class='modal-header'>
             			<button type='button' class='close' data-dismiss='modal'>&times;</button>
             			<h4 class='modal-title text-center'>STUDENT EDIT DATA</h4>
      				</div>
					<div class='modal-body'>
						<form action='Admission-Edit.php?id=$id' method='post' enctype='multipart/form-data'>
							<div class='row'>
								<div class='form-group col-md-6'>
									<label>Student Name</label>
									<input type='text' placeholder='Enter Student Name' pattern='[A-Za-z\s]+' title='Only use uppercase & lowercase letters.' name='Sname' required class='form-control' value='$sname'>
								</div>
								<div class='form-group col-md-6'>
									<label>Student CNIC</label>
									<input type='text' placeholder='15101-0000000-0' pattern='[0-9]{13}' title='Only use numbers, Do not use spaces & hyphens.' name='Scnic' required class='form-control' value='$scnic'>
								</div>
							</div>
							<div class='row'>
								<div class='form-group col-md-6'>
									<label>Student Mobile</label>
									<input type='tel' placeholder='0300-0000000' pattern='[0-9]{11}' title='Only use numbers, Do not use spaces & hyphens.' name='Smobile' required class='form-control' value='$smobile'>
								</div>
								<div class='form-group col-md-6'>
									<label>Father Name</label>
									<input type='text' placeholder='Enter Student Father Name' pattern='[A-Za-z\s]+' title='Only use uppercase & lowercase letters.' name='Fname' required class='form-control' value='$fname'>
								</div>
							</div>
							<div class='row'>
								<div class='form-group col-md-6'>
									<label>Father CNIC</label>
									<input type='text' placeholder='15101-0000000-0' pattern='[0-9]{13}' title='Only use numbers, Do not use spaces & hyphens.' name='Fcnic' required class='form-control' value='$fcnic'>
								</div>
								<div class='form-group col-md-6'>
									<label>Father Mobile</label>
									<input type='tel' placeholder='0300-0000000' pattern='[0-9]{11}' title='Only use numbers, Do not use spaces & hyphens.' name='Fmobile' required class='form-control' value='$fmobile'>
								</div>
							</div>
							<div class='row'>
								<div class='form-group col-md-6'>
									<label>Gender</label>
									<input list='Gender' placeholder='Select Student Gender' name='Gender' required class='form-control' value='$gender'>
                        			<datalist id='Gender'>
                            			<option>Male</option>
                            			<option>Female</option>
                            			<option>Other</option>
                        			</datalist>
								</div>
								<div class='form-group col-md-6'>
									<label>Date Of Birth</label>
									<input type='date' name='Birth' required class='form-control' value='$birth'>
								</div>
							</div>
							<div class='row'>
								<div class='form-group col-md-6'>
									<label>Blood Group</label>
									<input type='text' name='Blood' class='form-control' value='$blood'>
								</div>
								<div class='form-group col-md-6'>
									<label>Home Address</label>
									<input type='text' name='Home' required class='form-control' value='$home'>
								</div>
							</div>
							<div class='row'>
								<div class='form-group col-md-6'>
									<label>Email</label>
									<input type='email' placeholder='@gmail.com' pattern='[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$' name='Email' required readonly class='form-control' value='$email'>
								</div>
								<div class='form-group col-md-6'>
									<label>Religion</label>
									<input list='Religion' placeholder='Select Student Religion' name='Religion' class='form-control' value='$religion'>
                        			<datalist id='Religion'>
                            			<option>Islam</option>
                            			<option>Hindu</option>
                            			<option>Christian</option>
                            			<option>Others</option>
                        			</datalist>
								</div>
							</div>
							<div class='row'>
								<div class='form-group col-md-6'>
									<label>School & Board</label>
									<input type='text' name='School' required class='form-control' value='$school'>
								</div>
								<div class='form-group col-md-6'>
									<label>Roll Number</label>
									<input type='text' name='Rollno' required class='form-control' value='$rollno'>
								</div>
							</div>
							<div class='row'>
								<div class='form-group col-md-6'>
									<label>Passing Year</label>
									<input type='text' name='Year' required class='form-control' value='$year'>
								</div>
								<div class='form-group col-md-6'>
									<label>Total Marks</label>
									<input type='text' name='Tmarks' required class='form-control' value='$tmarks'>
								</div>
							</div>
							<div class='row'>
								<div class='form-group col-md-6'>
									<label>Obtained Marks</label>
									<input type='text' name='Omarks' required class='form-control' value='$omarks'>
								</div>
								<div class='form-group col-md-6'>
									<label>Percentage</label>
									<input type='text' name='Percent' required class='form-control' value='$percent'>
								</div>
							</div>
							<div class='row'>
								<div class='form-group col-md-6'>
									<label>Grade</label>
									<input type='text' name='Grade' required class='form-control' value='$grade'>
								</div>
								<div class='form-group col-md-6'>
									<label>Group</label>
									<input list='Group' placeholder='Select Student Group' name='Group' required class='form-control' value='$group'>
                        			<datalist id='Group'>
                            			<option>Pre-Engineering</option>
                            			<option>Pre-Medical</option>
                            			<option>Computer Science</option>
                            			<option>Humanities</option>
                        			</datalist>
								</div>
							</div>
							<div class='modal-footer'>
			 					<input type='submit' name='submit' value='Submit' class='btn btn-info btn-large'>
			 					<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
		 					</div>
        				</form>
    				</div>
				</div>
			</div>
    	</div>";
	}
	?>

<!------------------------------ SCRIPT TAG ------------------------------>

	<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script>
    	$(document).ready(function () {
      	$('#myTable').DataTable();});
  	</script>

</body>
</html>