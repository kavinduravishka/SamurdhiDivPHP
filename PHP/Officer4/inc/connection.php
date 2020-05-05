<?php 
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'projectdb';

    $connection = mysqli_connect('localhost','root','','projectdb');

    if(mysqli_connect_errno()){
        die('Database connection Failed '.mysqli_connect_error());
    }
    
?>
