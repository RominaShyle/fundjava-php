<?php

$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "myDB";


$conn = new mysqli($server_name,$username, $password, $db_name);

if($conn->connect_error){

    die('Connection error' . $conn->connect_error);
}

/*
$sql = "CREATE DATABASE myDB";

if($conn->query($sql) === TRUE){

    echo "Database was created";
}
else {
    echo "Error creating database:" . $conn->error;
}

*/


$sql = "CREATE TABLE IF NOT EXISTS Guests(

id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(30) NOT NULL,
last_name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

)";

if($conn->query($sql) === TRUE){

    echo "Table was created";
}
else {
    echo "Error creating table:" . $conn->error;
}

//prepared statement
//'John', 'Doe', 'john@example.com'
/*
$sql = "INSERT INTO Guests(first_name, last_name, email) VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sss",$first_name, $last_name, $email);

$first_name = "Jane";
$last_name = "Doe";
$email = "jane@test.com";
$stmt->execute();


$stmt->close();
*/
//ASC -> rend rrites
//DESC -> rend zbrites

$sql = "SELECT * FROM Guests WHERE first_name = 'John'  ORDER BY id ASC";

$result = $conn->query($sql);


if($result->num_rows > 0){
//nxjerrim gjithe te dhenat per userin qe ka id=1

while($row = $result->fetch_assoc()){

echo "Te dhenat per guestin me id=1 jane: <br> First name = ". $row['first_name'] . " 
Last name: " .  $row['first_name']. " Email: " .  $row['first_name'];



}

}else{

    echo "No results found!";
}


$sql = "DELETE FROM Guests WHERE id=2";

if($conn->query($sql) === TRUE){

    echo "Record was deleted";
}
else {
    echo "Error deleting record" . $conn->error;
}



$sql = "UPDATE Guests  set first_name = 'ana' WHERE id=1";

if($conn->query($sql) === TRUE){

    echo "Record was updated";
}
else {
    echo "Error updating record" . $conn->error;
}

 


 

/*
if($conn->query($sql) === TRUE){

    echo "Record was inserted";
}
else {
    echo "Error inserting record" . $conn->error;
}
*/




$conn->close();

?>