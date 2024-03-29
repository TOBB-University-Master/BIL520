<?php
// Function to create a sql connection.
function getDB() {
  $dbhost="127.0.0.1";
  $dbuser="root";
  $dbpass="root";
  $dbname="tobb_etu_bil520";

  // Create a DB connection
  $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . "\n");
  }
  return $conn;
}

$input_uname = $_GET['username'];
$input_pwd = $_GET['Password'];
$hashed_pwd = sha1($input_pwd);

// create a connection
$conn = getDB();

// do the query
//$result = $conn->query("SELECT id, name, eid, salary, ssn
//                       FROM credential
//WHERE name= '$input_uname' and Password= '$hashed_pwd'");

$stmt = $conn->prepare("SELECT id, name, eid, salary, ssn
			FROM credential
			WHERE name = ? and Password = ? ");

// Bind parameters to the query
$stmt->bind_param("is", $input_uname, $hashed_pwd);
$stmt->execute();
$stmt->bind_result($id, $name, $eid, $salary, $ssn);
$stmt->fetch();
$stmt->close();

/*
if ($result->num_rows > 0) {
  // only take the first row 
  $firstrow = $result->fetch_assoc();
  $id     = $firstrow["id"];
  $name   = $firstrow["name"];
  $eid    = $firstrow["eid"];
  $salary = $firstrow["salary"];
  $ssn    = $firstrow["ssn"];
}
 */

// close the sql connection
$conn->close();
?>
