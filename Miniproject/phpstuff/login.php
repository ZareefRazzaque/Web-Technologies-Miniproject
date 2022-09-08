<?php

$server = "localhost";
$save = "root";
$password = "";
$database = "miniproject";




$connection =  mysqli_connect($server, $save, $password, $database);

if(!$connection){
    die("could not connect to the user database".mysqli_connect_error());
}


$savedDetails = mysqli_query($connection, "SELECT * FROM userdetails");





$givenUserName = $_POST["Email"];
$givenPassword = $_POST["Password"];

header("Location: ../notloggedin/login.php?attempted");

for($i =0; $i<mysqli_num_rows( $savedDetails );$i++){

    $row = mysqli_fetch_array($savedDetails);

    if(    ($givenUserName== $row["username"]) && ($givenPassword == $row["password"])  ){
        
        session_start();
        $_SESSION["first name"] = $row["name"];
        $_SESSION["last name"] = $row["lastname"];
        $_SESSION["active"] = "true";
        header('Location: ..\loggedin\ZareefRazzaquePortfolio.php');
    }
    
}



?>

