<?php 
    $title = "Success";
    require_once './includes/header.php'; 
?>
 <h1 class="text-center text-success">You have been submitted</h1>

 <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
        <?php echo $_GET['firstname']." ".$_GET['lastname']; ?>
    </h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">
        <?php echo $_GET['specialty']; ?>
    </h6>
    <p class="card-text">
        <?php echo 'Date of Birth: '.$_GET['dob']; ?>
    </p>
    <p class="card-text">
        Contact: <?php echo ' '.$_GET['phone'].'; '.$_GET['email'].'.'; ?>
    </p>
  </div>
</div>


<?php require_once './includes/footer.php'; ?>