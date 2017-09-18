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
$studentname= $_POST["studentname"];
$fathername= $_POST["fathername"];
$email= $_POST["email"];
$phoneno= $_POST["phno"];
$dateofbirth= $_POST["dob"];
$native= $_POST["native"];

$sql="insert into student
(id,studentname,fathername,uemail,phonenumber,dob,native)values
(5,'$studentname','$fathername','$email','$phoneno','$dateofbirth','$native')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//$conn->close();
}

?>

<table border="1">
  <?php 
function getAllDetails()
{

 $conn=connection();

$sqlresult = "SELECT id,studentname FROM student";
$result = $conn->query($sqlresult);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id:" ."<tr><td>". $row["id"]."</td>".  " studentname: " ."<td>". $row["studentname"]. "</td></tr> ";
    }
} else {
    echo "0 results";
}
}


add();
getAllDetails();




?>

