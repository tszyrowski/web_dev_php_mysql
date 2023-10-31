<?php 
    $title = "Home";
    require_once './includes/header.php'; 
?>
   
    <h1 class="text-center">Registration for conference</h1>

    <form>
    <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstname">
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastname">
    </div>
    <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="text" class="form-control" id="dob">
    </div>
    <!-- <div class="mb-3">
        <label for="specialty" class="form-label">Specialty</label>
        <input type="text" class="form-control" id="specialty">
    </div> -->
    <select class="form-select" aria-label="Default select example">
        <option selected>Specialty</option>
        <option value="1">Database Admin</option>
        <option value="2">Software Dev</option>
        <option value="3">Web Admin</option>
        <option value="3">Other</option>
    </select>
    <!-- <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Specialty
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Database Admin</a></li>
            <li><a class="dropdown-item" href="#">Software Dev</a></li>
            <li><a class="dropdown-item" href="#">Web Admin</a></li>
            <li><a class="dropdown-item" href="#">Other</a></li>
        </ul>
        <br/>
    </div> -->
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Contact Number</label>
        <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp">
        <div id="phoneHelp" class="form-text">We'll never share your phone with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<?php require_once './includes/footer.php'; ?>