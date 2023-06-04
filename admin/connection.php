<?php 
    define('DB_HOST', 'localhost');
    define('DB_USER', 'marco');
    define('DB_PASS', '123456');
    define('DB_NAME', 'food_ordering');
    define('DB_PORT', '3108'); // Needed this because the default port is 3306


    // Create connection
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

    // Check connection
    if ($connection->connect_error) {
        die("[Connection failed]: " . $connection->connect_error);
        // die ~ return
    }

    echo "Connected to the server";

?>