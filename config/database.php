<?php

$mysqli = new mysqli("localhost","root","","ma_apparel");

if($mysqli->connect_error){
    die("failed to connection" . $mysqli->connect_error);
}
