<?php
require_once(__DIR__.'/../config/params.php');
require_once(__DIR__.'/../config/presets.php');
require_once('../engine/templating.php'); ?>

<?php echo renderHtml('header.html', $app); ?>
    <div class='overlay-container visible'>
       <div class="overlay">
            <img class="icon" id='close' src="./close-icon.png" alt="">
            <img class="mainView" src="<?php echo getPicturePathById($_GET['id'], $app); ?>

" alt="" />
       </div>
    </div>
<?php echo renderHtml('footer.html', $app); ?>
