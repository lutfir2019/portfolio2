<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pesan = $_POST["pesan"];

    // Lakukan sesuatu dengan data yang diterima, misalnya kirim email
    $to = "lutfirrahman2019@gmail.com"; // Ganti dengan alamat email tujuan
    $subject = "Pesan dari $name";
    $message = "Nama: $name\n";
    $message .= "Email: $email\n\n";
    $message .= "Pesan:\n$pesan";

    // Mengirim email
    mail($to, $subject, $message);

    // Redirect atau tampilkan pesan sukses, atau lakukan sesuatu yang sesuai
    exit();
}