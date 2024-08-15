<?php
    // Tipe Data Number (integer dan float)
    $umur = 18; // integer
    $tinggi_badan = 159; // float

    // Tipe Data String
    $nama = "Lestari Rahayu";
    $alamat = "Dusun Cikoneng, Desa Cikoneng, RT03/RW03, Kecamatan Ganeas, Kabupaten Sumedang";
    $pekerjaan = "Programmer";

    // Tipe Data Boolean
    $is_married = false; // Menyatakan apakah sudah menikah atau belum
    $punya_sim = true; // Menyatakan apakah memiliki SIM atau tidak

    // Output Data Diri
    echo "Nama: " . $nama . "<br>";
    echo "Umur: " . $umur . " tahun<br>";
    echo "Tinggi Badan: " . $tinggi_badan . " cm<br>";
    echo "Alamat: " . $alamat . "<br>";
    echo "Pekerjaan: " . $pekerjaan . "<br>";
    echo "Status Menikah: " . ($is_married ? "Sudah Menikah" : "Belum Menikah") . "<br>";
    echo "Memiliki SIM: " . ($punya_sim ? "Ya" : "Tidak") . "<br>";
?>