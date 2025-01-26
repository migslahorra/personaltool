<?php 
require_once '../db_connection.php';
if (isset($_POST)){
    $id = $_POST['id'];
    $syntax = $_POST['syntax'];
    $notes = $_POST['notes'];
    $sql = "INSERT INTO `php_pl`(`id`, `syntax`, `notes`) VALUES ('','$syntax','$notes')";
    
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>alert('Data Inserted Successfully')</script>";
        header("Location: ../index.html");
    }else{
        echo "<script>alert('Data Not Inserted')</script>";
    }
}
?>