<?php 
require_once(__DIR__.'/../config/params.php');
require_once(__DIR__.'/../config/presets.php');
require_once('../engine/templating.php'); 

function renderPhp ($file, array $params = [], $app) 
{
    require_once(TEMPLATE_DIR.'/'.$file);
}


function renderDivWithPicturesUseDb(array $arg, $params) 
{
    $photoDiv ='';
    $db = getBDconnection($arg);
    $arr = getPictureArray($db);
    closeBDConnection($db);

    foreach ($arr as $pic) {
        $photoDiv = $photoDiv . "<div><div class='inner'><img src='".$pic['path']
            ."' id='".$pic['id']."' alt='' border='0' style = 'width:".$params['width']
            ."; height: ".$params['height'].";'/><div class='badge'><p>".$pic['count']."</p></div></div></div>";
    } 
    echo $photoDiv;
}

function renderHtml($file, array $varriables = []) {
    $content = file_get_contents(TEMPLATE_DIR.'/'.$file);
    foreach ($varriables as $varName => $value) {
        $content = str_replace('{{'.$varName.'}}', $value, $content);
    }

    return $content;
}

function getBDconnection(array $appp) {
    $link = mysqli_connect(
        $appp['db_host'], $appp['db_user'], 
        $appp['db_password'], $appp['db_name']
    );
    return $link;
}

function closeBDConnection($db) {
    mysqli_close($db);   
}

function getPictureArray($db) 
    /**
     * return $pic =[['path'=>'./sdfdsf/pic1.jpg', 'count'=>'1'],
     *        [......]  ]    
     **/
{
    $query = "SELECT * FROM picture";    
    $result = mysqli_query($db, "SELECT * from `picture` ORDER BY count DESC"); 
    $count = mysqli_num_rows($result);
    $out=[];
    for ($i=0;$i < $count; $i++) {
        $out[] = mysqli_fetch_assoc($result);
    }
    return $out;
}

function getPicturePathById ($id, $app) {
    $db = getBDconnection($app);
    $query = "SELECT * FROM picture where id='".$id."';";    
    $result = mysqli_query($db, $query); 
    $out = mysqli_fetch_assoc($result);
    closeBDConnection($db);
    incCounterById($id, $app);
    return $out['path'];
}

function incCounterById ($id, $app) {
    $db = getBDconnection($app);
    $query = "UPDATE picture SET count = count + 1  where id='".$id."';";    
    $result = mysqli_query($db, $query); 
    closeBDConnection($db);
}

