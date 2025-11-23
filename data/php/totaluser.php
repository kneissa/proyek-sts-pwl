<?php
require_once 'config/database.php';

$query = "SELECT COUNT(*) AS total from `akun sekolah`";

$stmt = $connection->prepare($query);
$stmt-> execute();

$result = $stmt->get_result()->fetch_assoc();

$totalusers= $result['total'];

?>
