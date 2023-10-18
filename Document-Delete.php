<?php
include("Connection.php");
if (isset($_GET['id'])) {
    $fileId = $_GET['id'];
    $sql = "SELECT file_path FROM document WHERE id='$fileId'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $filePath = $row['file_path'];
        if (unlink($filePath)) {
            $deleteSql = "DELETE FROM document WHERE id='$fileId'";
            if (mysqli_query($conn, $deleteSql)) {
                echo "<script> alert('File Deleted Successfully!'); </script>";
                ?>
                <meta http-equiv = "refresh" content = "0; url= http://localhost/FYP/Admin-Document.php"/>
                <?php
            } else {
                echo "Error deleting file record: " . mysqli_error($conn);
            }
        } else {
            echo "Error deleting file from the server.";
        }
    } else {
        echo "File not found.";
    }
}
mysqli_close($conn);
?>