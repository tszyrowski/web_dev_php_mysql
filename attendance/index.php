<?php 
    $title = "Home";
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
?>
   
    <h1 class="text-center">Registration for conference</h1>

    <form method="post" action="success.php">
    <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstname" name="firstname">
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname">
    </div>
    <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="text" class="form-control" id="dob" name="dob">
    </div>

    <select class="form-select" aria-label="Default select example" name="specialty">
        <option selected>Specialty</option>
        <option value="Database Admin">Database Admin</option>
        <option value="Software Dev">Software Dev</option>
        <option value=Other">Other</option>
    </select>

    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Contact Number</label>
        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
        <div id="phoneHelp" class="form-text">We'll never share your phone with anyone else.</div>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

<?php require_once './includes/footer.php'; ?>