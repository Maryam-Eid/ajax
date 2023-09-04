<?php
//database
$conn = mysqli_connect('localhost', 'root', '', 'ajax');

echo 'processing..';

if (isset($_GET['name'])) {
    echo 'GET: Your Name Is ' . $_GET['name'];
}

if (isset($_POST['name'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    echo 'POST: Your Name Is ' . $_POST['name'];
    $query = "INSERT INTO users(name) VALUES('$name')";
    if (mysqli_query($conn, $query)) {
        echo ' Users Added..';
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}

