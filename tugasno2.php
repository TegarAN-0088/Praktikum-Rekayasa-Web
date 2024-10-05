<?php
// JSON yang sudah di-encode
$json_data = '{"nama":"Tegar Adimas Nugroho",
               "umur":20,
               "NIM":"G.211.22.0088",
               "programstudi":"Teknik Informatika"}';

// Decode JSON ke PHP Object
$obj = json_decode($json_data);

// Akses nilai dari PHP Object
echo "Nama: " . $obj->nama . "\n";  
echo "Umur: " . $obj->umur . "\n"; 
echo "NIM: " . $obj->NIM . "\n"; 
echo "Program Studi: " . $obj->programstudi . "\n"; 

// Decode JSON ke PHP Array
$array = json_decode($json_data, true);

// Akses nilai dari PHP Array
echo "Nama: " . $array['nama'] . "\n"; 
echo "Umur: " . $array['umur'] . "\n"; 
echo "NIM: " . $array['NIM'] . "\n";
echo "Program Studi: " . $array['programstudi'] . "\n";

?>  