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


$enteredTitle = $_GET["ProjectTitle"];
$enteredDetails = $_GET["Newproject"];
$dateWritten = date('y-m-d H:i:s');

$sending = "INSERT INTO `projects` (`title`, `details`, `date`) VALUES ('$enteredTitle', '$enteredDetails', '$dateWritten')";

if(    !(($enteredTitle == "")||($enteredDetails=""))   ){
    mysqli_query($connection, $sending);
}




header("Location: ../loggedin/projects.php");

?>