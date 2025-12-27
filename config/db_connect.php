<?php
require_once '../Classes/DbConnection.php';

// $conn = new DbConnection("localhost","zoo_assad_v2","momo","momo1");
$conn = new DbConnection("localhost","momo","momo1","zoo_assad_v2");

$pdo = $conn->getConnection();

?>