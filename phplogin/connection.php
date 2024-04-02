<?php
$servername = 'localhost';
$username = 'asib';
$password = '1234';
$db_name = 'tripplannar';

$conn = new mysqli( $servername, $username, $password, $db_name );
if ( $conn->connect_error ) {
    die( 'Connection failed'.$conn->connect_error );
}
echo '';

?>
