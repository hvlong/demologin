<?php defined('DIR_BASE') OR exit('No direct script access allowed'); ?>

<div class="col-md-4 col-md-offset-4">
    <h1 class="text-uppercase">Login</h1>

    <?php if ($content != null) { ?>
        <div>
<!--            <pre>--><?php //var_dump($content);?><!--</pre>-->
            <?php echo $content['message']['content']; ?>
        </div>
    <?php print_r('aaaaaaaaaa' . $content);} ?>
    <form action="/user/login" method="post" accept-charset="utf-8">
        <div>
            <label>Email</label>
            <input type="text" name="username" id="username" placeholder="Email">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <input type="submit" value="Submit">
    </form>
</div>
