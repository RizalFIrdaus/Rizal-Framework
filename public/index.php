<?php
$info = "PATH NOT FOUND";
isset($_SERVER["PATH_INFO"]) ? $info = $_SERVER["PATH_INFO"] : $info;
echo $info;