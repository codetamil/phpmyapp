<html>
    <body>

<h1>Welcome </h1>
<?php
function connection()
{

$servername = "localhost";
$username = "root";
$password = "";
$dbName="quizsystem";

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
$email=$_POST["email"];
$pasword=$_POST["psw"];

$sql="insert into register(email,password)values('$email','$pasword')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//$conn->close();
}?>

<table border="1">
    <?php
function getAllDetails()
{

 $conn=connection();

$sqlresult = "SELECT email,password FROM register";
$result = $conn->query($sqlresult);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "email:" ."<tr><td>". $row["email"]."</td>".  "  password: " ."<td>". $row["password"]. "</td></tr> ";
    }
} else {
    echo "0 results";
}
}


connection();
getAllDetails();


?>

</table>
        </body>
        </html>
