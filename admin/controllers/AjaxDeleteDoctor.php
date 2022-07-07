<?php
include '../../core/pdo.php';
include '../models/doctor.php';

if (isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];
    $delete_doctor = delete_doctor($id);
}
?>

