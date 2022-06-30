<?php
$conn = new mysqli("localhost", "root", "", "dars");
$id=$_GET["id"];
if($conn -> connect_error){
    echo "Ошибка". $conn->connect_error;
}
$sql = "DELETE FROM users WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

?>