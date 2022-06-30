<?php
$conn = new mysqli("localhost", "root", "", "dars");
if($conn -> connect_error){
    echo "Ошибка". $conn->connect_error;
}
$sql = "UPDATE users SET fio='sarvar' WHERE id=1";

if (mysqli_query($conn, $sql)) {
    echo "Нав карда шуд";
  } else {
    echo "Нав карда нашуд: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?> 