<?php
require_once(__DIR__.'/../config/params.php');
require_once(__DIR__.'/../config/presets.php');
require_once('../engine/templating.php'); ?>


<?php echo renderHtml('header.html', $app); ?>

<div class='wrapper'>
    <div class='mainCont' >
        
        <h1><?= $app['header'] ?></h1>
        <div class='photoCont' id='cont'>
            <?php renderDivWithPicturesUseDb($app, $params); ?>
        </div>
    </div> <!-- mainCont -->
    <div class='clearfix'></div>
</div> <!-- wrapper  -->

<?php echo renderHtml('footer.html', $app); ?>
