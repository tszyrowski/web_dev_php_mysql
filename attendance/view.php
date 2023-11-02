<?php 
    $title = "View Record";
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';

    if(!isset($_GET['id'])){
        echo '<h1 class="text-center text-danger">Please check details and try again</h1>';
    }else{
        $id = $_GET['id'];
        $results = $crud->getAttendeeDetails($id);        
    
?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
        <?php echo $results['firstname']." ".$results['lastname']; ?>
    </h5>
    <!-- Display specialty name based on ID. The name read from db -->
    <h6 class="card-subtitle mb-2 text-body-secondary">
        <?php 
            $sid = $results['specialty_id'];
            $specialty = $crud->getSpecialtyById($sid);
            echo $specialty['specialty_name'];
        ?>
    </h6>
    <p class="card-text">
        <?php echo 'Date of Birth: '.$results['dateofbirth']; ?>
    </p>
    <p class="card-text">
        Contact: <?php echo ' '.$results['phone'].'; '.$results['emailaddress'].'.'; ?>
    </p>
  </div>
</div>
<?php } ?>
<?php require_once './includes/footer.php'; ?>