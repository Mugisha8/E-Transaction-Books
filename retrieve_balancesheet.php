<?php
// Replace database credentials with your actual values
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accounting";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data from the database table
$sql = "SELECT date,name,debit,credit FROM `jurnal`,`accounts` WHERE accounts.aid=jurnal.aid";

$result = $conn->query($sql);

// Display the retrieved data in the HTML table
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["debit"] . "</td>";
        echo "<td>" . $row["credit"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='2'>No data found.</td></tr>";
}

$conn->close();
?>