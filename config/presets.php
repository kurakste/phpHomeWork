<?php 
$params = ['pictures'=>[], 'dir'=>'','width'=>'300px', 'height'=>'200px'];
$params['dir']=__DIR__.'/img';
$params['pictures'] = glob('./img/*.jpg');

