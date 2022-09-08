<?php
session_start();

$server = "localhost";
$save = "root";
$password = "";
$database = "miniproject";

date_default_timezone_set('Europe/London');


$connection =  mysqli_connect($server, $save, $password, $database);

if(!$connection){
    die("could not connect to the user database".mysqli_connect_error());
}


$Contact = $_GET["ContactEmail"];
$Subject = $_GET["Subject"];
$main = $_GET["MainArticle"];
$dateWritten = date('y-m-d H:i:s');

$sending = "INSERT INTO `messages` (`Contact`, `Subject`, `Message`, `date`) VALUES ('$Contact', '$Subject', '$main', '$dateWritten')";

if(    !(($Contact == "")||($Subject=="")||($main==""))   ){
    mysqli_query($connection, $sending);
}




header("Location: ../notloggedin/contact.php?attempted");

?>