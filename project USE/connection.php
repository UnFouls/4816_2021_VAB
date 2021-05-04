<?php
$host = 'localhost'; // адрес сервера 
$database = 'register_form'; // имя базы данных
$user = 'root'; // имя пользователя
$password = 'qwertyktyf220677'; // пароль


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO register_form (reg_name,reg_password,reg_rep_password,reg_email,reg_phone_num) VALUES  ('".$_POST["reg_name"]."', '".$_POST["reg_password"]."','".$_POST["reg_rep_password"]."','".$_POST["reg_email"]."','".$_POST["reg_phone_num"]."')";;

if ($conn->query($sql) == TRUE) {
echo "Пользователь ".$_POST["reg_name"]." успешно зарегистрирован</br>";
echo "<a href='pilaba.html'>На главную</a>"; ;
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
