<?php
    require 'conect.php';
    mysqli_query($CONN, 'CREATE TABLE
    users (
        id SMALLINT NOT NULL AUTO_INCREMENT,
        email VARCHAR(100) NOT NULL UNIQUE,
        nickname TEXT NOT NULL,
        password TEXT NOT NULL,
        role VARCHAR(10) NOT NULL,
        PRIMARY KEY(id)
    )');
    mysqli_query($CONN, 'CREATE TABLE
    notes (
        id SMALLINT NOT NULL AUTO_INCREMENT,
        title TEXT NOT NULL,
        datatext TEXT NOT NULL,
        author TINYINT NOT NULL,
        date VARCHAR(11) NOT NULL,
        access VARCHAR(8) NOT NULL,
        PRIMARY KEY(id)
    )');

echo '<script>alert("It work!");</script>';
?>