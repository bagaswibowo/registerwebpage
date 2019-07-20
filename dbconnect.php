<?php
// $host = 'registerdbmysql.mysql.database.azure.com';
// $username = 'bagaswibowo@registerdbmysql';
// $password = 'Advan111';
// $db_name = 'register';

$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "C:\ssl\BaltimoreCyberTrustRoot.crt.pem", NULL, NULL) ; 
mysqli_real_connect($conn, 'registerdbmysql.mysql.database.azure.com', 'bagaswibowo@registerdbmysql', 'Advan111', 'register', 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

?>