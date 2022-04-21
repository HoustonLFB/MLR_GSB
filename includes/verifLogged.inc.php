<?php
if (isset($_SESSION['logged'])) {
    header("Location: redirection.php");
    exit();
}
