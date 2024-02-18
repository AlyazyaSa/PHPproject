<?php

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "todo-list";


try {
    $conn = new PDO("mysql:host=$sName;db_name=$db_name",
    $uName, $pass );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected!";
}catch(PDOException $e){
    echo "Connectio failed : " . $e->getMessage();
}


// $conn = mysqli_connect('localhost' , 'root' ,'', 'demo');
// $query ='CREATE TABLE todo(
//     id int PRIMARY KEY AUTO_INCREMENT , 
//     title VARCHAR(50) NOT NULL)
//     ';

//     $exce = mysqli_query($conn , $query);
//     if(!$ece){
//         echo "error in query Excution";
//     }

//     echo 'Table is created Created';
//     mysqli_close($conn)


?>
