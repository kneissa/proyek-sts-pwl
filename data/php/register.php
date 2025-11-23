<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require_once 'config/database.php';

if (isset($_POST['register'])) {

    $name = htmlspecialchars(trim($_POST['username']));
    $password = $_POST['password'];
    $passwordConfirmation = $_POST['confirm'];

    if ($password != $passwordConfirmation) {
        echo "
            <script>
                alert('Password and Password Confirmation are not match');
                window.location.href = '../../register.php';
            </script>
        ";
        exit;
    }

    $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
    $query = "INSERT INTO `akun sekolah` (username, password) VALUES (?, ?)";
    $stmt = $connection->prepare($query);
    $stmt->bind_param('ss', $name, $passwordHashed);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {

        $user_id = $connection->insert_id;
        $data = $_SESSION['pendaftaran'];

        // data1
        $query1 = "INSERT INTO data1 (nama_siswa, nama_panggilan, `tmpt/tgl_lahir`, agama, email, nomor_anak, user_id)
                   VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt1 = $connection->prepare($query1);
        $stmt1->bind_param(
            'sssssii',
            $data['namaSiswa'],
            $data['namaPanggilan'],
            $data['ttl'],
            $data['agama'],
            $data['email'],
            $data['nomorAktif'],
            $user_id
        );
        $stmt1->execute();

        // data2
        $query2 = "INSERT INTO data2 (nama_papa, nama_mama, alamat, nomor_ortu, user_id)
                   VALUES (?, ?, ?, ?, ?)";
        $stmt2 = $connection->prepare($query2);
        $stmt2->bind_param(
            'sssii',
            $data['namaAyah'],
            $data['namaIbu'],
            $data['alamat'],
            $data['noOrtu'],
            $user_id
        );
        $stmt2->execute();

        // data3
        $query3 = "INSERT INTO data3 (NISN, gender, sekolah_asal, user_id)
                   VALUES (?, ?, ?, ?)";
        $stmt3 = $connection->prepare($query3);
        $stmt3->bind_param(
            'issi',
            $data['nisn'],
            $data['gender'],
            $data['asalSekolah'],
            $user_id
        );
        $stmt3->execute();


        $querya = "INSERT INTO alasan (why, user_id) VALUES (?, ?)";
        $stmta = $connection->prepare($querya);
        $stmta->bind_param('si', $data['alasan'], $user_id);
        $stmta->execute();

        unset($_SESSION['pendaftaran']);

        header('Location: ../../pendaftaranberhasil.html');
        exit;
    }

    echo "
        <script>
            alert('Error to register new user');
            window.location.href = '../../register.php';
        </script>
    ";
    exit;
}
?>
