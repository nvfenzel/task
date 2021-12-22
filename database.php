<?php

$connection = mysqli_connect(
    'localhost',
    'root',
    '',
    'taskapp'
);

if (!$connection) {
    header('Location: error.php');
}
