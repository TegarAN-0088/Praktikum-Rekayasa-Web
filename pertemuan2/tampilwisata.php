<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

//alamat localhost untuk file getWisata.php hasil export JSON
$send = curl("http://localhost/rekayasaweb/pertemuan2/getwisata.php");

//mengubah JSON menjadi array
$data = json_decode($send, true);

//membuat table dari data wisata
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>ID Wisata</th>
        <th>Kota</th>
        <th>Landmark</th>
        <th>Tarif</th>
      </tr>";

foreach($data as $row){
    echo "<tr>";
    echo "<td>".$row["id_wisata"]."</td>";
    echo "<td>".$row["kota"]."</td>";
    echo "<td>".$row["landmark"]."</td>";
    echo "<td>".$row["tarif"]."</td>";
    echo "</tr>";
}

echo "</table>";
?>