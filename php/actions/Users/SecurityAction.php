<?php
session_start();
if (!isset($_SESSION["auth"])) {
    header("Location: /projets/php/login.php");
}