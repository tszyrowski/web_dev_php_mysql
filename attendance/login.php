<?php
$title = "login";
require_once './includes/header.php';
require_once './db/conn.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = strtolower(trim($_POST['username']));
    $password = $_POST['password'];
    $new_password = md5($password.$username);

    $result = $user->getUser($username, $new_password);

    if(!$result) {
        echo '<div class="alert alert-danger">Username or Password is incorrect! Please try again. </div>';
    } else {
        $_SESSION['username'] = $username;
        $_SESSION['userid'] = $result['id'];
        header("Location: viewrecords.php");
    }

}
?>

<h1 class="text-center"><?php echo $title ?></h1>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <table class="table table-sm">
        <tr>
            <td><label for="username">Username: *</label></td>
            <td>
                <input 
                    type="text" name="username" id="username" class="form-control" 
                    value="<?php
                        if($_SERVER['REQUEST_METHOD'] == 'POST') {
                            echo $_POST['username'];
                        }
?>"
                >
                <?php if(empty($_POST['username']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
                    echo '<p class="text-danger">Please enter a username</p>';
                } ?>
            </td>
        </tr>

        <tr>
            <td><label for="password">Password: *</label></td>
            <td style="position: relative;">
                <input 
                    type="password" 
                    name="password" 
                    id="password" 
                    class="form-control"
                    style="padding-right: 30px;" 
                    value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') {
                        echo htmlspecialchars($_POST['password']);
                    } ?>"
                >
                <i 
                    id="togglePassword" 
                    class="fas fa-eye" 
                    style="position: absolute; right: 10px; top: 10px; cursor: pointer;">
                </i>
                <?php if(empty($_POST['password']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
                    echo '<p class="text-danger">Please enter a password</p>';
                } ?>
            </td>
        </tr>

        <script>
            const togglePassword = document.getElementById('togglePassword');
            const password = document.getElementById('password');

            togglePassword.addEventListener('click', function (e) {
                // toggle the type attribute
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                // toggle the eye / eye slash icon
                this.classList.toggle('fa-eye');
                this.classList.toggle('fa-eye-slash');
            });
        </script>

    </table>
    <br/>
    <input type="submit" value="Login" class="btn btn-primary btn-block" name="submit">
    <a href='#'>Forgot Password</a>
</form><br/><br/>

<?php require_once './includes/footer.php'; ?>