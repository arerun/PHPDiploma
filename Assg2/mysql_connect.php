<?php #mysqli_connect.php

// This file contains the database access information.

// This file also establishes a connectio to MySQL,

// selects the database, and sets the encoding.

// Set the databse access information as constants:

 DEFINE ('DB_USER', 'root');

 DEFINE ('DB_PASSWORD', '');

 DEFINE ('DB_HOST', 'localhost');

 DEFINE ('DB_NAME', 'flowermart');



//Make the connection:

 $dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL:' . mysqli_connect_error() );



//Set the connection:

 mysqli_set_charset($dbc, 'utf8');

 ?>