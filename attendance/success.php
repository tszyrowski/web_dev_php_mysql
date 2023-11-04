<?php 
    $title = "Success";
    require_once './includes/header.php'; 
    require_once './db/conn.php';

    if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $specialty = $_POST['specialty'];

        //Call function to insert and track if success or not
        $isSuccess = $crud->insertAttendees($fname, $lname, $dob, $email, $contact, $specialty);

        if($isSuccess){
            require_once './includes/success_msg.php';
        }
        else{
            require_once './includes/error_msg.php';
        }
    }
?>


 <?php echo $_SERVER['REQUEST_METHOD']; ?>
 <!-- <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
        <?php //echo $_GET['firstname']." ".$_GET['lastname']; ?>
    </h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">
        <?php // echo $_GET['specialty']; ?>
    </h6>
    <p class="card-text">
        <?php //echo 'Date of Birth: '.$_GET['dob']; ?>
    </p>
    <p class="card-text">
        Contact: <?php //echo ' '.$_GET['phone'].'; '.$_GET['email'].'.'; ?>
    </p>
  </div>
</div> -->
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
        <?php echo $_POST['firstname']." ".$_POST['lastname']; ?>
    </h5>
    <!-- Display specialty name based on ID. The name read from db -->
    <h6 class="card-subtitle mb-2 text-body-secondary">
        <?php 
            $sid = $_POST['specialty'];
            $specialty = $crud->getSpecialtyById($sid);
            echo $specialty['specialty_name'];
        ?>
    </h6>
    <p class="card-text">
        <?php echo 'Date of Birth: '.$_POST['dob']; ?>
    </p>
    <p class="card-text">
        Contact: <?php echo ' '.$_POST['phone'].'; '.$_POST['email'].'.'; ?>
    </p>
  </div>
</div>

<?php require_once './includes/footer.php'; ?>