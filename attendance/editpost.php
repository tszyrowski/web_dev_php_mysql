<?php
$title = "edit";
require_once './includes/header.php';
require_once 'includes/auth_check.php';
require_once './db/conn.php';

if(isset($_POST['submit'])) {
    //extract values from the $_POST array
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $specialty = $_POST['specialty'];

    //Call function to insert and track if success or not
    $result = $crud->editAttendee($id, $fname, $lname, $dob, $email, $contact, $specialty);

    if($result) {
        header("Location: viewrecords.php");
    } else {
        echo '<h1 class="text-center text-danger">There was an error in processing</h1>';
    }
}
?>

<?php require_once './includes/footer.php'; ?>