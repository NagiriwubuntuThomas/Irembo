<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "irembo-gov"; 

$conn = new mysqli($host, $user, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idNumber = $conn->real_escape_string($_POST["idNumber"]);
    $phoneNumber = $conn->real_escape_string($_POST["phoneNumber"]);


    $sql = "INSERT INTO users (id_number, phone_number) VALUES ('$idNumber', '$phoneNumber')";
    if ($conn->query($sql) === TRUE) {
        $user_id = $conn->insert_id; 
        header("Location: set_password.php?id=$user_id");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>