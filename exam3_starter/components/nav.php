<nav class="navbar navbar-expand-sm" style=" background-color: #e3f2fd;" data-bs-theme="light">
    <div class="container-fluid">

        <?php if (!empty($_SESSION['user_id'])): ?>
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="?view=list">List Records</a></li>
                <li class="nav-item"><a class="nav-link" href="?view=create">Add Record</a></li>
            </ul>
            
            <!-- Note: I have merged the two separate if statements to minimize comparisons -->
            <span class="navbar-text ">Welcome, <?= htmlspecialchars($_SESSION['full_name']) ?></span>
        <?php endif; ?>

        <ul class="navbar-nav ms-auto">

            <?php if (!empty($_SESSION['user_id'])): ?>
                <li class="nav-item"><a class="nav-link" href="?view=orders">Orders</a></li>
                <li class="nav-item"><a class="nav-link" href="?view=cart">Cart</a></li>
                <li class="nav-item">
                    <form method="post">
                        <input type="hidden" name="action" value="logout">
                        <button class="btn btn-sm btn-outline-secondary">Logout</button>
                    </form>
                </li>
            <?php else: ?>

                <li class="nav-item"><a class="nav-link" href="?view=login">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="?view=register">Register</a></li>


            <?php endif; ?>
        </ul>

    </div>
</nav>