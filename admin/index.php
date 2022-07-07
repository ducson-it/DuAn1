
<?php
include_once '../core/pdo.php';
include_once 'inc/header.php';
include_once 'models/doctor.php';
include 'controllers/DoctorController.php';
?>

<?php
$action = isset($_GET['act']) ? $_GET['act'] : '';
if (!empty($action)) {
    switch ($action) {
        case 'manage_doctor':
            list_data_doctor();
            break;
        default:
            include 'controllers/HomeController.php';
            break;
    }
} else {
    include_once 'controllers/HomeController.php';
}
?>

<?php
include_once 'inc/footer.php';
?>