<?php
    header("Content-Type: text/html; charset=utf-8");

    require 'conect.php';
    $note_result = mysqli_query($CONN, 'SELECT * FROM notes');
    $user_result = mysqli_query($CONN, 'SELECT * FROM users');
    $notes = [];
    $users = [];

    while($note = mysqli_fetch_assoc($note_result)){
        array_push($notes, $note);
    }

    while($user = mysqli_fetch_assoc($user_result)){
        array_push($users, $user);
    }

    $file = fopen('notes.txt', 'w');
    fwrite($file, json_encode($notes));
    fclose($file);

    $file = fopen('users.txt', 'w');
    fwrite($file, json_encode($users));
    fclose($file);

echo '<script>alert("Success!\nDataBase successfully exported");</script>';
?>