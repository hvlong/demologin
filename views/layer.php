<?php defined('DIR_BASE') OR exit('No direct script access allowed'); ?>
<?php include DIR_VIEW . '/head.php'?>
<div class="container-fluid">
    <?php include DIR_VIEW . '/header.php'?>

    <div class="row main-content">
        <?php if (Authentication::isLogin()): ?>
            <?php
                $backUrl = '/home';
            ?>
            <div class="col-md-8 col-md-offset-2">
                <ol class="breadcrumb">
                    <li class="active"> <a href="<?php echo $backUrl?>">Home</a></li>
                </ol>
            </div>
        <?php endif; ?>

        <?php
        if (!empty($dirView)) {
            include('views/' . $dirView . '.php');
        } else {
            include DIR_VIEW . '/content.php';
        }
        ?>
    </div>


</div>
<?php include 'views/footer.php'?>
