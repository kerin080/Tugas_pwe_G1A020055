<?php
function query($query)
{
    try {
        $db = PWE_DB::connect();
        // prepare data sebelum di execute
        $result = $db->prepare($query);

        // execute data
        $result->execute();

        // mengembalikan data dalam bentuk objek
        $data = $result->fetchAll(PDO::FETCH_OBJ);

        return $data;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
function tampilAnggota()
{
    try {
        $db = PWE_DB::connect();
        $query = $db->prepare('SELECT * FROM `anggota` ');
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_OBJ);

        return $data;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
function ubahAnggota($data, $id)
{
    // tangkap semua data yang ada
    $nama = $data['nama'];
    $npm = $data['npm'];
    try {
        $db = PWE_DB::connect();
        $result = $db->prepare("UPDATE anggota SET 
        nama='$nama',
        npm = '$npm'
        WHERE id = '$id'");
        // execute data
        $result->execute();
        // melihat ada berapa perubahan didalam tabel
        return $result->rowCount();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
if (isset($_POST['daftar'])) {
    $db = PWE_DB::connect();

    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $password = md5($password);

    $query = $db->prepare('INSERT INTO `anggota` (`id`, `nama`, `npm`, `email`, `password`)
    VALUES (NULL, ?, ?, ?, ?)');
    $insert = $query->execute([$nama, $npm, $email, $password]);

    if ($insert) {
        header('Location: berhasil-daftar.php');
    } else {
        echo 'Gagal melakukan pendaftaran. Silahkan periksa data kembali';
    }
}
if (isset($_POST['login'])) {
    $db = PWE_DB::connect();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $password = md5($password);

    $query = $db->prepare('SELECT * FROM `anggota` WHERE `email` = ? AND `password` = ?');
    $query->execute([$email, $password]);

    if ($query->rowCount() > 0) {
        $data = $query->fetch(PDO::FETCH_ASSOC);

        $_SESSION['is_login'] = true;
        $_SESSION['id'] = $data['id'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['npm'] = $data['npm'];

        header('Location: dasbor.php');
    } else {
        echo 'Email atau password salah';
    }
}
