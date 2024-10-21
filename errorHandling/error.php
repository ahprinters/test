<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('html_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
// class Glitch extends \Error { //\Exception

// }
// try{
//     throw new Glitch('Glitch');
// }
// catch(\Exception $e)
// {
//     echo 'caught' . $e -> getMessage();
    
// }


// function connect($host, $username, $password, $database) 1usage 
// {
//  $conn = mysqli_connect($host, $username, $password, $database);
//  if (!$conn) {
//  throw new \Exception('Failed to connect to MySQL: ' . mysqli_connect_error());
// }
//  return $conn;
// }
// $conn = connect('127.0.0.1', 'root', '', 'daraz');
// var_dump($conn);


// echo "<pre>";
// function connect($host, $username, $password, $database) {
//     $conn = mysqli_connect($host, $username, $password, $database);
//     if (!$conn) {
//         throw new \Exception('Failed to connect to MySQL: ' . mysqli_connect_error());
//     }
//     return $conn;
// }

// $conn = connect('127.0.0.1', 'root', '123', 'daraz');
// // echo "<pre>";
// var_dump($conn);
// error_log(
//     string $message,
//     int $message_type = 0,
//     ?string $destination = null,
//     ?string $additional_headers = null
// ): bool
// var_dump($message);

// =================================
// Send notification through the server log if we can not
// connect to the database.
// if (!Ora_Logon($username, $password)) {
//     error_log("Oracle database not available!", 0);
// }

// // Notify administrator by email if we run out of FOO
// if (!($foo = allocate_new_foo())) {
//     error_log("Big trouble, we're all out of FOOs!", 1,
//                "operator@example.com");
// }

// // another way to call error_log():
// error_log("You messed up!", 3, "/var/tmp/my-errors.log");
// ========================
// filename: /tmp/a.php

echo "<pre>";
function a_test($str)
{
    echo "\nHi: $str";
    var_dump(debug_backtrace());
}

a_test('friend');


// filename: /tmp/b.php
include_once '/tmp/a.php';