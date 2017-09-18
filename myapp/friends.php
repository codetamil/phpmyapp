<?php




function connection()
{

$servername = "localhost";
$username = "root";
$password = "";
$dbName="mysqlbasics";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
return $conn;
}


function add()
{
    $conn=connection();
$employeename= $_POST["employeename"];
$fathername= $_POST["fathername"];

$sql="insert into employee
(id,employeename,fathername)values
(5,'$employeename','$fathername')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//$conn->close();
}
add();
?>