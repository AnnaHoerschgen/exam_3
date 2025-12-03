<?php
require_once __DIR__ . "/../data/functions.php";

if ($_POST) { // checks for post method
    // take username and password inputs
    $username = trim(filter_input(INPUT_POST, 'username'));
    $full_name = filter_input(INPUT_POST, 'full_name');
    $password = trim(filter_input(INPUT_POST, 'password'));
    
    if (!is_null(user_find_by_username($username))) {
        $register_error = "A user with this username has been found. Please try another username.";
    } else {
        user_create($username, $full_name, password_hash($password, PASSWORD_DEFAULT));
        header("Location: " .
        __DIR__ . "/../?view=list");
        exit();
    }
}
?>

<h2>Register</h2>

<?php if (!empty($register_error)): ?>
    <div class="alert alert-danger"></div>
<?php endif; ?>

<form method="post">
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" name="full_name" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <input type="password" name="confirm_password" class="form-control">
    </div>

    <input type="hidden" name="action" value="register">
    <button class="btn btn-primary">Create Account</button>
</form>