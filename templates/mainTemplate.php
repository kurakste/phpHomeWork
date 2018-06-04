<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{title}}</title>
    <link href="css/main.css" rel="stylesheet"/>
</head>
<body>
    <div class='overlay-container invisible'>
       <div class="overlay">
            <img class="icon" id='close' src="./close-icon.png" alt="">
            <img class="mainView" src="./img/pic4.jpg" alt="" />
       </div>
    </div>
<div class="wrapper">
    <h1><?= $app['header'] ?> </h1>
    <div class="mainCont" >
        <div class="photoCont" id='cont'>
            <?php renderDivWithPictures($params) ?>
        </div>

    </div> <!-- mainCont -->
    <div class="clearfix"></div>
</div> <!-- wrapper  -->
<script src="js/main.js"></script>

</html>
