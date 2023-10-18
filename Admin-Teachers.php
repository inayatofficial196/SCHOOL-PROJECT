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
    <link rel="stylesheet" href="Admin-style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>ADMIN TEACHERS</title>
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
            <li class="click"><a href="#"><i class="fa-solid fa-book-open-reader"></i> Teachers</a></li>
            <li><a href="#"><i class="fa-solid fa-calendar"></i> Events</a></li>
            <li><a href="#"><i class="fa-solid fa-bell"></i> News</a>
                <ul>
                    <li><a href="Admin-News.php">Message News</a></li>
                    <li><a href="Admin-Document.php">Document Files</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa-solid fa-file-pen"></i> Admission</a>
                <ul>
                    <li><a href="#">Admission Rules</a></li>
                    <li><a href="#">Fee Structure</a></li>
                    <li><a href="Admin-Admission.php">Apply Now</a></li>
                </ul>
            </li>
            <li><a href="Admin-Contact.php"><i class="fa-solid fa-message"></i> Contact Us</a></li>
        </ul>
    </nav>

    <div class="myHead">
        <p>TEACHERS POST UPLOAD</p>
    </div>

    <div class="newForm">
        <form action="#" method="POST" enctype="multipart/form-data">
            <input type="file" name="Image" accept="image/*" required>
            <input type="text" name="Name" placeholder="Teacher Name" required>
            <input type="text" name="Post" placeholder="Teacher Post" required>
            <textarea name="Details" placeholder="Teacher Details" required></textarea>
            <input type="url" name="Facebook" placeholder="Enter Facebook Account URL" value="https://www.facebook.com/">
            <input type="url" name="Twitter" placeholder="Enter Twitter Account URL" value="https://www.twitter.com/">
            <input type="url" name="Instagram" placeholder="Enter Instagram Account URL" value="https://www.instagram.com/">
            <input type="url" name="Whatsapp" placeholder="Enter Whatsapp Account Number" value="https://wa.me/">
            <input type="url" name="Email" placeholder="Enter Email Account URL" value="mailto:">
            <input type="submit" name="Submit" value="Create Post" class="myButton">
        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $teacherName = $_POST['Name'];
        $teacherPost = $_POST['Post'];
        $teacherDetails = $_POST['Details'];
        $facebook = $_POST['Facebook'];
        $twitter = $_POST['Twitter'];
        $instagram = $_POST['Instagram'];
        $whatsapp = $_POST['Whatsapp'];
        $email = $_POST['Email'];
        $image = $_FILES['Image']['name'];
        $image_path = 'Teachers Uploads/' . $image;
        move_uploaded_file($_FILES['Image']['tmp_name'], $image_path);
        $query = "INSERT INTO teachers (image_path, teacher_name, teacher_post, teacher_details, facebook, twitter, instagram, whatsapp, email) VALUES ('$image_path', '$teacherName', '$teacherPost', '$teacherDetails', '$facebook', '$twitter', '$instagram', '$whatsapp', '$email')";
        if(mysqli_query($conn, $query)) {
            echo "<script> alert('Teacher Post Uploaded Successfully!'); </script>";
        } else {
            echo "Teacher Post Failed to Upload." . $conn->error;
        }
    }
    ?>

    <div class="myTable">
        <table border="1" cellspacing="0px">
            <tr>
                <th>IMAGE</th>
                <th>TEACHER NAME</th>
                <th>TEACHER POST</th>
                <th>TEACHER DETAILS</th>
                <th>ACTION</th>
            </tr>

            <?php
            $query = "SELECT * FROM teachers ORDER BY upload_date DESC";
            $result = mysqli_query($conn, $query);
            if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td><img src='" . $row['image_path'] . "' style='width: 100px; height: 100px; object-fit: contain;'></td>";
                    echo "<td>" . $row['teacher_name'] . "</td>";
                    echo "<td>" . $row['teacher_post'] . "</td>";
                    echo "<td>" . $row['teacher_details'] . "</td>";
                    echo "<td><a href='Teachers-Delete.php?id=$row[id]'>
                    <input type='submit' value='Delete' id='delete' onclick='return checkdelete()'></a>";
                    echo "<a href='Teachers-Update.php?id=$row[id]'>
                    <input type='submit' value='Update' id='update' onclick='return checkupdate()'></a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No Teachers Post Available.</td></tr>";
            }
            ?>
        </table>
    </div>

    <script>
        function checkdelete(){
            return confirm('Are you sure ! You want to Delete this Post ?');
        }
        function checkupdate(){
            return confirm('Are you sure ! You want to Update this Post ?');
        }
        if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</body>
</html>