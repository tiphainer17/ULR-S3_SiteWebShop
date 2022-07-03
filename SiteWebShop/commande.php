<?php
session_start();
if('Quantite' != 0) {
    if (isset($_SESSION['mail'])) {

    } else {
        header('location:login.php');
    }
} else {
    header('location:index.php');
}
?>