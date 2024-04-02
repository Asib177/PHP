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
        $error_message = 'Login failed. Invalid username or password!';
    }
}
?>

<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8'>
<meta http-equiv = 'X-UA-Compatible' content = 'IE=edge'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>Log in Page</title>
<link rel = 'stylesheet' type = 'text/css' href = 'style.css'>
<!-- Bootstrap CSS -->
<link href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel = 'stylesheet'>
</head>
<body>
<div id = 'form' class = 'container'>
<h1>Login</h1>
<?php if ( isset( $error_message ) ) {
    ?>
    <div class = 'alert alert-danger' role = 'alert'>
    <?php echo $error_message;
    ?>
    </div>
    <?php }
    ?>
    <form name = 'form' action = 'index.php' method = 'POST'>
    <label>Username: </label>
    <input type = 'text' id = 'user' name = 'user' class = 'form-control'><br><br>
    <label>Password: </label>
    <input type = 'password' id = 'pass' name = 'pass' class = 'form-control'><br><br>
    <input type = 'submit' id = 'btn' value = 'Login' name = 'submit' class = 'btn btn-primary' />
    </form>
    </div>
    <!-- Bootstrap JS -->
    <script src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'></script>
    </body>
    </html>
