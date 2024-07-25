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
$sql_last_movement = "SELECT movement FROM movements ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql_last_movement);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<br>آخر حركة في قاعدة البيانات: " . $row["movement"];
} else {
    echo "<br>لم يتم تسجيل أي حركة";
}

$conn->close();
?>
