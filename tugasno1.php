<?php

// Membuat variabel array
$array_data = [
    "nama" => "Tegar Adimas Nugroho",
    "umur" => 20,
    "NIM" => "G.211.22.0088",
    "programstudi" => "Teknik Informatika"
];

// Encode array ke format JSON
$json_data = json_encode($array_data);

// Output hasil encoding
echo "JSON data: " . $json_data;

?>