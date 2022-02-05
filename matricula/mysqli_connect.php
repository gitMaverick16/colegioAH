<?php
// Create a connection to the logindb database. 
// Set the encoding and the access details as constants:
DEFINE ('DB_USER', 'albhid4_albhid4');
DEFINE ('DB_PASSWORD', '7YF}B7Z8q7rm');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'albhid4_colegiodatabase');
// Make the connection:
// Make the connection:
$dbcon = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

// Set the encoding...
mysqli_set_charset($dbcon, 'utf8');