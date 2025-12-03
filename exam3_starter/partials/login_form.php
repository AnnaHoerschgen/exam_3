<?php
if ($_POST) { // checks for post method
    // take username and password inputs
    $username = trim(filter_input(INPUT_POST, 'username'));
    $password = trim(filter_input(INPUT_POST, 'password'));
    $match = user_find_by_username($username);

    if (is_null($match)) {
        $login_error = "This user was not found. Please re-check your username and try again - or consider creating an account.";
    } elseif (password_hash($password, PASSWORD_DEFAULT) !== $match['password_hash']) {
        $login_error = "Please check that your password is correct, then try again.";
    }
}
?>

<h2>Login</h2>

<?php if (!empty($login_error)): ?>
    <div class="alert alert-danger"><?php echo ($login_error) ?></div>
<?php endif; ?>

<form method="post">
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control">
    </div>

    <input type="hidden" name="action" value="login">
    <button class="btn btn-primary">Login</button>
</form>

<p class="mt-3">Need an account? <a href="?view=register">Register</a></p>