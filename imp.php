<?php
    $file = fopen('notes.txt', 'r');
    $notes = json_decode(fread($file, filesize('notes.txt')), true);
    fclose($file);

    $file = fopen('users.txt', 'r');
    $users = json_decode(fread($file, filesize('users.txt')), true);
    require 'db_connection.php';
    
    foreach($notes as $note){
        mysqli_query($CONN, "INSERT INTO notes(id, title, content, image, author_id, date, access)
                    VALUES ('{$note['id']}','{$note['title']}',
                    '{$note['datatext']}','{$note['author']}','{$note['date']}','{$note['access']}')");
    }

    foreach($users as $user){
        mysqli_query($CONN, "INSERT INTO users(id, email, nickname, password, role)
                    VALUES ('{$user['id']}','{$user['email']}',
                    '{$user['nickname']}','{$user['password']}','{$user['role']}')");
    }
echo '<pre>';
var_dump($notes);

echo '<script>alert("Success!\nDataBase is ready");</script>';
?>