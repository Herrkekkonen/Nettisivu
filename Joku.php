<!DOCTYPE html>
<html>
<body>

<?php
$servername = "apassi.okol.org";
$username = "s6tato00";
$password = "Hamppari1";
$dbname = "s6tato00";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ID, Nimi, Pelipaikka FROM Taulu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["ID"]. " - Name: ". $row["Nimi"]. " " . $row["Pelipaikka"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>