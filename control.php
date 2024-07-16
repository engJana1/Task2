<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "robot_direction"; 
 $conn = new mysqli($servername, $username, $password, $dbname); 

if ($conn->connect_error) { 
    die("فشل الاتصال: " . $conn->connect_error); 
} 
 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['direction'])) { 
    $direction = $_POST['direction']; 
 
    $sql = "INSERT INTO movements (movement) VALUES ('$direction')"; 
    if ($conn->query($sql) === TRUE) { 
        echo "تم تسجيل الحركة بنجاح: " . $direction; 
    } else { 
        echo "خطأ في تسجيل الحركة: " . $conn->error; 
    } 
} 
 
$conn->close(); 
?>