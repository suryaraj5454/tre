// db.php
<?php
$host = 'localhost';
$dbname = 'tre';  
$username = 'root';  
$password = '';  

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Success: " . $e->getMessage();
}
?>
