<?php
// multidimensional array
$blogs = [
    [ 'title' => 'mario party', 'author' => 'mario', 'content' => 'lorem' ],
    [ 'title' => 'mariokart cheats', 'author' => 'toad', 'content' => 'lorem' ],
    [ 'title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem' ]
];

// print_r( $blogs[ 1 ][ 1 ] );
// echo $blogs[ 2 ][ 'author' ];
// echo count( $blogs );
$blogs[] = [ 'title' => 'castle party', 'author' => 'peach', 'content' => 100 ];
// print_r( $blogs );
$popped = array_pop( $blogs );
print_r( $popped );
?>

<!DOCTYPE html>
<html>
<head>
<title>PHP Tutorials</title>
</head>
<body>

</body>
</html>