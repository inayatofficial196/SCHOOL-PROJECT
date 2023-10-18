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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>ADMISSION VERIFIED</title>
	<style>
	*{
    	padding: 0;
    	margin: 0;
    	box-sizing: border-box;
    	font-family: 'Poppins', sans-serif;
	}
	header{
    	color: white;
    	background-color: rgb(20, 160, 110);
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
	.myHead p{
    	background: linear-gradient(109.6deg, rgb(36, 45, 57) 11.2%, rgb(16, 37, 60) 51.2%, rgb(0, 0, 0) 98.6%);
    	color: white;
    	padding: 5px;
    	margin: 30px;
    	font-size: 25px;
    	border-radius: 5px;
    	text-align: center;
    	letter-spacing: 2px;
	}
	.myButton{
		background-color: rgb(40, 45, 50);
    	color: white;
    	border: none;
    	padding: 5px 10px;
		margin-left: 10px;
    	border-radius: 3px;
	}
	.myButton:hover{
		background-color: rgb(20, 160, 110);
    	box-shadow: 2px 2px 5px gray;
    	transition: all 0.2s;
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

    <div class="myHead">
        <p>STUDENTS PENDING LIST</p>
    </div>

    <div class="container" style="width: 97%; margin: 30px auto;">
		<table class="table table-bordered col-md-12">
  			<thead>
    			<tr> 
	    			<th scope="col">STUDENT NAME</th>
	    			<th scope="col">FATHER NAME</th>
	    			<th scope="col">PHONE</th>
	    			<th scope="col">EMAIL</th>
	    			<th scope="col">STATUS</th>
	    			<th scope="col">ACTION</th>
    			</tr>
  			</thead>

			<?php
			$query = "SELECT * FROM admission WHERE status = 'Pending' ORDER BY upload_date DESC";
			$result = mysqli_query($conn, $query);
			while($row = mysqli_fetch_array($result)) {
			?>

  			<tbody>
    			<tr>
      				<td><?php echo $row['student_name']; ?></td>
      				<td><?php echo $row['father_name']; ?></td>
      				<td><?php echo $row['student_mobile']; ?></td>
      				<td><?php echo $row['email']; ?></td>
      				<td><?php echo $row['status']; ?></td>
      				<td>
		    			<form action="#" method="POST">
							<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
		      				<input type="submit" name="verified" value="Verified" class="myButton">
		      				<input type="submit" name="unverified" value="Unverified" class="myButton">
		    			</form>
      				</td>
    			</tr>
  			</tbody>
  			<?php } ?>
		</table>
	</div>

	<?php
	if(isset($_POST['verified'])) {
		$id = $_POST['id'];
		$select = "UPDATE admission SET status = 'Verified' WHERE id = '$id' ";
		$result = mysqli_query($conn, $select);
		// header("Location: Admission-Verify.php");
	}
	if(isset($_POST['unverified'])) {
		$id = $_POST['id'];
		$select = "UPDATE admission SET status = 'Unverified' WHERE id = '$id' ";
		$result = mysqli_query($conn, $select);
		// header("Location: Admission-Verify.php");
	}
	?>

	<div class="myHead">
        <p>STUDENTS VERIFIED & UNVERIFIED LIST</p>
    </div>

    <div class="container" style="width: 97%; margin: 30px auto;">
		<table class="table table-bordered col-md-12">
  			<thead>
    			<tr>
	    			<th scope="col">STUDENT NAME</th>
	    			<th scope="col">FATHER NAME</th>
	    			<th scope="col">PHONE</th>
	    			<th scope="col">EMAIL</th>
	    			<th scope="col">STATUS</th>
    			</tr>
  			</thead>

			<?php
			$query = "SELECT * FROM admission WHERE status = 'Verified' OR status = 'Unverified' ORDER BY upload_date DESC";
			$result = mysqli_query($conn, $query);
			while($row = mysqli_fetch_array($result)) {
			?>

  			<tbody>
    			<tr>
      				<td><?php echo $row['student_name']; ?></td>
      				<td><?php echo $row['father_name']; ?></td>
      				<td><?php echo $row['student_mobile']; ?></td>
      				<td><?php echo $row['email']; ?></td>
      				<td><?php echo $row['status']; ?></td>
    			</tr>
  			</tbody>
  			<?php } ?>
		</table>
	</div>

</body>
</html>