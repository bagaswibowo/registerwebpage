<?php
$host = 'registerdbmysql.mysql.database.azure.com';
$username = 'bagaswibowo@registerdbmysql';
$password = 'Advan111';
$db_name = 'register';

//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
    if (mysqli_connect_errno($conn)) {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    }

    // if (mysqli_query($conn, '
    // CREATE TABLE IF NOT EXISTS `users` (
    //     `id` int(11) NOT NULL AUTO_INCREMENT,
    //     `username` varchar(100) NOT NULL,
    //     `email` varchar(100) NOT NULL,
    //     `password` varchar(255) NOT NULL,
    //     PRIMARY KEY (`id`)
    //   ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
    // ')) {
    // printf("Table created\n");
    // }
mysqli_close($conn);

?>