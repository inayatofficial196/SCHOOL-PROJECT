<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: Admin-Login.php");
    die();
}
include("Connection.php");
if(isset($_GET['id'])) {
    $Id = $_GET['id'];
    $sql = "SELECT * FROM teachers WHERE id = $Id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $teacherName = $row['teacher_name'];
        $teacherPost = $row['teacher_post'];
        $teacherDetails = $row['teacher_details'];
        $facebook = $row['facebook'];
        $twitter = $row['twitter'];
        $instagram = $row['instagram'];
        $whatsapp = $row['whatsapp'];
        $email = $row['email'];
    } else {
        echo "Teacher Post Not Found." . $conn->error;
        exit();
    }
}
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
    <title>TEACHERS UPDATE</title>
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
            <li class="click"><a href="Admin-Teachers.php"><i class="fa-solid fa-book-open-reader"></i> Teachers</a></li>
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
        <p>TEACHERS POST UPDATE</p>
    </div>

    <div class="newForm">
        <form action="#" method="POST" enctype="multipart/form-data">
            <input type="file" name="Image" accept="image/*" required>
            <input type="text" name="Name" placeholder="Teacher Name" required value="<?php echo $teacherName; ?>">
            <input type="text" name="Post" placeholder="Teacher Post" required value="<?php echo $teacherPost; ?>">
            <textarea name="Details" placeholder="Teacher Details" required></textarea>
            <input type="url" name="Facebook" placeholder="Enter Facebook Account URL" value="<?php echo $facebook; ?>">
            <input type="url" name="Twitter" placeholder="Enter Twitter Account URL" value="<?php echo $twitter; ?>">
            <input type="url" name="Instagram" placeholder="Enter Instagram Account URL" value="<?php echo $instagram; ?>">
            <input type="url" name="Whatsapp" placeholder="Enter Whatsapp Account Number" value="<?php echo $whatsapp; ?>">
            <input type="url" name="Email" placeholder="Enter Email Account URL" value="<?php echo $email; ?>">
            <input type="submit" name="Submit" value="Update Post" class="myButton">
        </form>
    </div>

    <?php
    if (isset($_GET['id'])) {
        $Id = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $teacherName = $_POST['Name'];
            $teacherPost = $_POST['Post'];
            $teacherDetails = $_POST['Details'];
            $facebook = $_POST['Facebook'];
            $twitter = $_POST['Twitter'];
            $instagram = $_POST['Instagram'];
            $whatsapp = $_POST['Whatsapp'];
            $email = $_POST['Email'];
            $sql = "UPDATE teachers SET teacher_name = '$teacherName', teacher_post = '$teacherPost', teacher_details = '$teacherDetails', facebook = '$facebook', twitter = '$twitter', instagram = '$instagram', whatsapp = '$whatsapp', email = '$email' WHERE id = $Id";
            if ($conn->query($sql) === TRUE) {
                echo "<script> alert('Teacher Post Updated Successfully!'); </script>";
            } else {
                echo "Error Updating Teacher Post: " . $conn->error;
            }
            if ($_FILES['Image']['error'] === UPLOAD_ERR_OK) {
                $targetDir = "Teachers Uploads/";
                $newImagePath = $targetDir . basename($_FILES['Image']['name']);
                if (move_uploaded_file($_FILES['Image']['tmp_name'], $newImagePath)) {
                    $sql = "UPDATE teachers SET image_path = '$newImagePath' WHERE id = $Id";
                    if ($conn->query($sql) === TRUE) {
                        echo "<script> alert('Teacher Image Updated Successfully!'); </script>";
                        ?>
                        <meta http-equiv = "refresh" content = "0; url= http://localhost/FYP/Admin-Teachers.php"/>
                        <?php
                    } else {
                        echo "Error Updating Teacher Image: " . $conn->error;
                    }
                } else {
                    echo "Error Uploading the New Image.";
                }
            }
        }
        $conn->close();
    }
    ?>

</body>
</html>