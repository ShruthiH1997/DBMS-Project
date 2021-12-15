

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'sms';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
?>
