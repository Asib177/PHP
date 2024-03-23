<?php
//connect to database
$conn = mysqli_connect( 'localhost', 'asib', '1234', 'ninja_pizza' );
//chect connection
if ( !$conn ) {
    echo 'Connection error: ' . mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html>

<?php include( 'templates/header.php' );
?>

<?php include( 'templates/footer.php' );
?>

</html>