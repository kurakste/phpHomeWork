<?php 

function getBDconnection(array $appp) {
    $link = mysqli_connect(
        $appp['db_host'], $appp['db_user'], 
        $appp['db_password'], appp['db_password']
    );
    return $link;
}

function closeBDConnection($db) {
    mysqli_close($db);   
}

function getPictureArray($db) 
{
       
}
