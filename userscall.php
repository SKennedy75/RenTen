<?php

$db = mysqli_connect('localhost', 'root', '', 'rentenusers');

// Check connection
if ($db->connect_error) {
    die("Unable to make a connection: " . $db->connect_error);
}