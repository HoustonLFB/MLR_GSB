<?php
session_start();

//RECUP INFO
$IDuser = $_SESSION['IDuser'];
$praID = 

$reqSQLinto = "INSERT INTO rapportVisite VALUES (NULL, $IDuser, $praID);"