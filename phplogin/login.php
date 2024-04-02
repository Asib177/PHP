<?php
include( 'connection.php' );

if ( isset( $_POST[ 'submit' ] ) ) {
    $User_Name = $_POST[ 'user' ];
    $Pass_word = $_POST[ 'pass' ];

    $sql = "SELECT * FROM logins WHERE User_Name = '$User_Name' AND Pass_word = '$Pass_word'";
    $result = mysqli_query( $conn, $sql );
    $count = mysqli_num_rows( $result );

    if ( $count == 1 ) {
        header( 'Location: welcome.php' );
    } else {
        echo '<script>
            window.location.href = "index.php";
            alert("Login failed. Invalid username or password!!");
        </script>';
    }
}
?>
