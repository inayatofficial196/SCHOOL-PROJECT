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
    <title>ADMIN CONTACT</title>
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
            <li><a href="#"><i class="fa-solid fa-file-pen"></i> Admission</a>
                <ul>
                    <li><a href="#">Admission Rules</a></li>
                    <li><a href="#">Fee Structure</a></li>
                    <li><a href="Admin-Admission.php">Apply Now</a></li>
                </ul>
            </li>
            <li class="click"><a href="#"><i class="fa-solid fa-message"></i> Contact Us</a></li>
        </ul>
    </nav>

    <div class="myHead">
        <p>CONTACT US RECORDS</p>
    </div>

    <?php
    $query = "SELECT * FROM contact ORDER BY upload_date DESC";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    // echo $total . " ";
    ?>

    <div class="myTable">
        <table rules="rows" frame="border">
            <tr>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>MESSAGE</th>
                <th>ACTION</th>
            </tr>

            <?php
            if($total != 0) {
                while($result = mysqli_fetch_assoc($data)) {
                    echo "<tr>
                    <td>".$result['first_name']."</td>
                    <td>".$result['last_name']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['phone']."</td>
                    <td>".$result['message']."</td>
                    <td style='padding-bottom: 5px;'><a href='Contact-Delete.php?id=$result[id]'>
                    <input type='submit' value='Delete' id='delete' onclick='return checkdelete()'></a></td>
                    </tr>";
                }
            } else {
                echo "<tr><td>No Records in the Contact-Us.</td></tr>";
            }
            ?>
        </table>
    </div>

    <script>
        function checkdelete(){
            return confirm('Are you sure ! You want to Delete this Record ?');
        }
    </script>

</body>
</html>