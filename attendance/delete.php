<?php
$title = "delete";
require_once './includes/header.php';
require_once 'includes/auth_check.php';
require_once './db/conn.php';

if(isset($_GET['id'])) {
    //extract values from the $_POST array
    $id = $_GET['id'];


    //Call function to insert and track if success or not
    $result = $crud->deleteAttendee($id);

    if($result) {
        header("Location: viewrecords.php");
    } else {
        include './includes/error_msg.php';
    }
}
?>

<?php require_once './includes/footer.php'; ?>