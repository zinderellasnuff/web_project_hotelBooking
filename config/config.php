<?php


    //host
    define("HOST", "localhost");

    //dbname
    define("DBNAME", "hotel-booking");

    //user
    define("USER", "root");

    //password
    define("PASS", "");

    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME."",USER, PASS);



