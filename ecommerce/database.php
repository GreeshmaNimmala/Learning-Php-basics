<?php 


$connect = mysqli_connect(HOST_NAME, HOST_USER, HOST_PASSWORD, DB_NAME);
$createtable_query = "CREATE TABLE Users (userId int(10) AUTO_INCREMENT PRIMARY KEY, userName
varchar(255), userPassword varchar(255), email varchar(255));";
$create_table_query = mysqli_query($connect, $createtable_query);
if (!$createtable_query) {
die('Table Users creation error\n: ' . mysqli_error());
}
mysqli_close($connect);

?>