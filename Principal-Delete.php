<?php
include("Connection.php");
if (isset($_GET['id'])) {
    $imageId = $_GET['id'];
    $sql = "SELECT image_path FROM principal WHERE id = $imageId";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imagePath = $row['image_path'];
        if (unlink($imagePath)) {
            $sql = "DELETE FROM principal WHERE id = $imageId";
            if ($conn->query($sql) === TRUE) {
                echo "<script> alert('Image Deleted Successfully!'); </script>";
                ?>
                <meta http-equiv = "refresh" content = "0; url= http://localhost/FYP/Admin-Principal.php"/>
                <?php
            } else {
                echo "Error Deleting Image: " . $conn->error;
            }
        } else {
            echo "Error Deleting Image File from the Server.";
        }
    } else {
        echo "Image Not Found.";
    }
    $conn->close();
}
?>