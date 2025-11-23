<?php
require_once 'config/database.php';

function getProducts()
{
    global $connection;

    $products = [];

    $query = "
    SELECT d1.user_id, d1.nama_siswa, d3.gender
    FROM data1 d1
    JOIN data3 d3 ON d1.user_id = d3.user_id
    ";

    $stmt = $connection->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($product = $result->fetch_assoc()) {
        $products[] = $product;
    }

    return $products;
}

?>
