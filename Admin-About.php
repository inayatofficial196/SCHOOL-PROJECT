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
    <title>ADMIN ABOUT</title>
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
            <li class="click"><a href="#"><i class="fa-solid fa-address-card"></i> About Us</a></li>
            <li><a href="Admin-Gallery.php"><i class="fa-solid fa-image"></i> Gallery</a></li>
            <li><a href="Admin-Teachers.php"><i class="fa-solid fa-book-open-reader"></i> Teachers</a></li>
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
        <p>SCHOOL IMAGE UPLOAD</p>
    </div>

    <div class="myForm">
        <form action="#" method="POST" enctype="multipart/form-data">
            <input type="submit" name="Submit" id="upload" value="Upload Image">
            <input type="file" name="Image" accept="image/*">
        </form>
    </div>

    <?php
    $targetDir = "Gallery Uploads/";
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    if (isset($_POST['Submit'])) {
        $targetDir = "Gallery Uploads/";
        $imageName = $_FILES['Image']['name'];
        $imagePath = $targetDir . basename($imageName);
        $imageFileType = strtolower(pathinfo($imagePath, PATHINFO_EXTENSION));
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");
        if (in_array($imageFileType, $allowedExtensions)) {
            move_uploaded_file($_FILES['Image']['tmp_name'], $imagePath);
            $sql = "INSERT INTO about (image_name, image_path, upload_date) VALUES ('$imageName', '$imagePath', NOW())";
            if ($conn->query($sql) === TRUE) {
                echo "<script> alert('Image Uploaded Successfully!'); </script>";
                ?>
                <meta http-equiv = "refresh" content = "0; url= http://localhost/FYP/Admin-About.php"/>
                <?php
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "<script> alert('Invalid file format. Only JPG, JPEG, PNG, and GIF files are allowed.'); </script>";
        }
    }
    ?>

    <div class="myTable">
        <table rules="rows" frame="border">
            <tr>
                <th>IMAGE</th>
                <th>NAME</th>
                <th>ACTION</th>
            </tr>

            <?php
            $sql = "SELECT * FROM about ORDER BY upload_date DESC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td><img src="' . $row['image_path'] . '" style="width: 100px; height: 100px; object-fit: contain;"></td>';
                    echo '<td>' . $row['image_name'] . '</td>';
                    echo "<td><a href='About-Delete.php?id=$row[id]'>
                    <input type='submit' value='Delete' id='delete' onclick='return checkdelete()'></a></td>";
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="3">No School Images Available.</td></tr>';
            }
            $conn->close();
            ?>
        </table>
    </div>

    <script>
        function checkdelete(){
            return confirm('Are you sure ! You want to Delete this Image ?');
        }
    </script>

</body>
</html>