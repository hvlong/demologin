<?php defined('DIR_BASE') OR exit('No direct script access allowed'); ?>
<header class="row">
    <div class="col-md-4 text-uppercase text-center">
        <h2>Long Demo MVC</h2>
    </div>
    <div class="col-md-4 col-md-offset-4">
        <?php if (Authentication::isLogin()): ?>
            <p></p>
            <p>Welcome <?php echo $_SESSION['user']['name']?></p>
            <p><a href="user/profile.php">Profile</a>  <a href="user/logout.php">Logout</a></p>
        <?php else: ?>
            <p></p>
            <a href="user/login">Login</a>
            <a href="user/register">Register</a>
        <?php endif; ?>

    </div>

</header>
