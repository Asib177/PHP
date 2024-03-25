<?php

// indexed arays
$peopleOne = [ 'asib', 'redoy', 'rakibul' ];
// echo $peopleOne[ 1 ];

$peopleTwo = array( 'fuad', 'rakib' );
// echo $peopleTwo[ 1 ];
$ages = [ 20, 30, 40, 50 ];
// print_r( $ages );
$ages[ 1 ] = 25;
// print_r( $ages );
$ages[] = 60;
// print_r( $ages );
array_push( $ages, 70 );
// print_r( $ages );
// echo count( $ages );

$peopleThree = array_merge( $peopleOne, $peopleTwo );
// print_r( $peopleThree );

$ninjasOne = [ 'a' =>'A', 'b'=>'B', 'c'=>'C' ];
// echo $ninjasOne[ 'b' ];
// print_r( $ninjasOne );
$ninjasTwo = [ 'abs'=>'red', 'xyx'=>'blue', 'zzz'=>'yellow' ];
// print_r( $ninjasTwo );
// $ninjasTwo[ 'xyx' ] = 'orrange';
// print_r( $ninjasTwo );
// $ninjasTwo[ 'www' ] = 'hahaha';
// print_r( $ninjasTwo );

// echo count( $ninjasOne );
$ninjasThree = array_merge( $ninjasOne, $ninjasTwo );
print_r( $ninjasThree );

//associative arrays
?>

<!DOCTYPE html>
<html>
<head>
<title>PHP Tutorials</title>
</head>
<body>

</body>
</html>