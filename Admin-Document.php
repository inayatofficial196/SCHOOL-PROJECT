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
    <title>ADMIN DOCUMENT</title>
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
            <li class="click"><a href="#"><i class="fa-solid fa-bell"></i> News</a>
                <ul>
                    <li><a href="Admin-News.php">Message News</a></li>
                    <li><a href="#">Document Files</a></li>
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
        <p>DOCUMENT FILES UPLOAD</p>
    </div>

    <div class="myForm">
        <form action="#" method="POST" enctype="multipart/form-data">
            <input type="submit" name="Submit" id="upload" value="Upload File">
            <input type="file" name="pdf_file" accept=".pdf">
        </form>
    </div>

    <?php
    if (isset($_POST['Submit'])) {
        $targetDirectory = "Document Uploads/";
        $fileName = $_FILES['pdf_file']['name'];
        $targetFile = $targetDirectory . $fileName;
        if (move_uploaded_file($_FILES['pdf_file']['tmp_name'], $targetFile)) {
            $file_path = $targetFile;
            $upload_date = date('Y-m-d H:i:s');
            $fileName = mysqli_real_escape_string($conn, $fileName);
            $file_path = mysqli_real_escape_string($conn, $file_path);
            $upload_date = mysqli_real_escape_string($conn, $upload_date);
            $sql = "INSERT INTO document (file_name, file_path, upload_date) VALUES ('$fileName', '$file_path', '$upload_date')";
            if (mysqli_query($conn, $sql)) {
                echo "<script> alert('File Uploaded Successfully!'); </script>";
                ?>
                <meta http-equiv = "refresh" content = "0; url= http://localhost/FYP/Admin-Document.php"/>
                <?php
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Error uploading the file.";
        }
    }
    ?>

    <div class="myTable">
        <table rules="rows" frame="border">
            <tr>
                <th>DOCUMENT FILE</th>
                <th>ACTION</th>
            </tr>

            <?php
            $sql = "SELECT * FROM document ORDER BY upload_date DESC";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo '<td><a href="' . $row['file_path'] . '">' . $row['file_name'] . '</a></td>';
                    echo "<td style='padding-bottom: 5px;'><a href='Document-Delete.php?id=$row[id]'>
                    <input type='submit' value='Delete' id='delete' onclick='return checkdelete()'></a></td>";
                    echo "</tr>";
                }
            } else {
                echo '<tr><td colspan="2">No Document Files Available.</td></tr>';
            }
            mysqli_close($conn);
            ?>
        </table>
    </div>

    <script>
        function checkdelete() {
            return confirm('Are you sure ! You want to Delete this File ?');
        }
    </script>

</body>
</html>