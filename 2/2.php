<?php
session_start();
if (isset($_SESSION['name'])){
    $b = $_SESSION['name'];
    echo 'Привет ' . $b;
}
