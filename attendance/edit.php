<?php 
    $title = "Edit Record";
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';

    $specialty = $crud->getSpecialties();
    
    if(!isset($_GET['id'])){
        include './includes/error_msg.php';
        header("Location: viewrecords.php");
    }else{
        $id = $_GET['id'];
        $attendee = $crud->getAttendeeDetails($id);
?>
   
    <h1 class="text-center">Edit Record</h1>

    <form method="post" action="editpost.php">
    <input type="hidden" name="id" value="<?php echo $attendee['attendee_id'] ?>" />
    <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" class="form-control" value="<?php echo $attendee["firstname"] ?>" id="firstname" name="firstname">
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" class="form-control" value="<?php echo $attendee["lastname"] ?>" id="lastname" name="lastname">
    </div>
    <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="text" class="form-control" value="<?php echo $attendee["dateofbirth"] ?>" id="dob" name="dob">
    </div>

    <select class="form-select" aria-label="Default select example" name="specialty">

        <?php while ($row = $specialty->fetch(PDO::FETCH_ASSOC)) { ?>
            <option value="<?php echo $row['specialty_id']; ?>"<?php if($row['specialty_id'] ==
            $attendee['specialty_id']) echo 'selected' ?> >
                <?php echo $row['specialty_name']; ?>
            </option>
        <?php } ?>
    </select>

    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" value="<?php echo $attendee["emailaddress"] ?>" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Contact Number</label>
        <input type="text" class="form-control" value="<?php echo $attendee["contactnumber"] ?>" id="phone" name="phone" aria-describedby="phoneHelp">
        <div id="phoneHelp" class="form-text">We'll never share your phone with anyone else.</div>
    </div>

    <button type="submit" name="submit" class="btn btn-success btn-block">Save changes</button>
    </form>
<?php } ?>
<?php require_once './includes/footer.php'; ?>