<?php 
@ob_start();
$basename = basename(__DIR__);
@header("location: /$basename/frontend/web/");
?>