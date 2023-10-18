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
    <title>ADMIN MARQUEE</title>
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
            <li class="click"><a href="#"><i class="fa-solid fa-house"></i> Home</a>
                <ul>
                    <li><a href="Admin-Principal.php">Principal Image</a></li>
                    <li><a href="#">Marquee News</a></li>
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
        <p>MARQUEE NEWS UPLOAD</p>
    </div>

    <div class="myForm">
        <form action="#" method="POST">
            <input type="submit" name="Submit" id="upload" value="Upload News">
            <input type="text" name="News" id="marquee" placeholder="Enter Latest News" required>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $news = $_POST['News'];
        $sql = "INSERT INTO marquee (news, upload_date) VALUES ('$news', NOW())";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        header("Location: Admin-Marquee.php");
        exit();
    }
    ?>

    <div class="myNews">
        <?php
        $sql = "SELECT * FROM marquee ORDER BY upload_date DESC";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='post'>";
                echo "<h3>" . $row['news'] . "</h3>";
                echo "<span class='date'>" . $row['upload_date'] . "</span>";
                echo "<a href='Marquee-Delete.php?id=" . $row['id'] . "'>
                <input type='submit' value='Delete' id='delete' onclick='return checkdelete()'></a>";
                echo "</div>";
            }
        } else {
            echo "No Marquee News Available.";
        }
        ?>
    </div>

    <script>
        function checkdelete(){
            return confirm('Are you sure ! You want to Delete this News ?');
        }
    </script>

</body>
</html>