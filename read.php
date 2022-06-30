<?php
$conn = new mysqli("localhost", "root", "", "dars");
if($conn -> connect_error){
    echo "Ошибка". $conn->connect_error;
}
$sql = "SELECT * FROM users";
$result = $conn->query($sql); 
echo "<table border=1>";
echo "<tr><td></td><td>ID</td><td>fio</td><td>email</td><td>phone</td></tr>";
while($rr=$result->fetch_assoc())
{
    echo "<tr>";
    echo "<td><a href=delete.php?id=".$rr['id'].">Delete</a></td>";
    echo "<td>".$rr['id']."</td>";
    echo "<td>".$rr['fio']."</td>";
    echo "<td>"."<em>".$rr['email']."</em>"."</td>";
    echo "<td>"."<em>".$rr['phone']."</em>"."</td>";

 
    echo "</tr>";
}
echo "</table>";

?>
