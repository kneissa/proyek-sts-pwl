<?php
session_start();
require_once 'config/database.php';

// Ambil user_id
if (isset($_GET['user_id'])) {
    // dari admin klik link
    $user_id = (int) $_GET['user_id'];
} elseif (isset($_SESSION['user_id'])) {
    // dari user sendiri
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = null; // nanti bisa cek di HTML
}

// Ambil data kalau user_id ada
$data = null;
if ($user_id) {
    $query = "
    SELECT 
        a.username,
        d1.nama_siswa,
        d1.nama_panggilan,
        d1.`tmpt/tgl_lahir`,
        d1.agama,
        d1.email,
        d1.nomor_anak,
        d2.nama_papa,
        d2.nama_mama,
        d2.alamat,
        d2.nomor_ortu,
        d3.NISN,
        d3.gender,
        d3.sekolah_asal,
        al.why AS alasan
    FROM `akun sekolah` a
    LEFT JOIN data1 d1 ON d1.user_id = a.id
    LEFT JOIN data2 d2 ON d2.user_id = a.id
    LEFT JOIN data3 d3 ON d3.user_id = a.id
    LEFT JOIN alasan al ON al.user_id = a.id
    WHERE a.id = ?
    ";

    $stmt = $connection->prepare($query);
    $stmt->bind_param('i', $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
}
?>