<?php

    $mahasiswa = [
       [ 
        "Nama" => "Yoga Muhamad",
        "NIM" => 12172004,
        "Email" => "yogaandhika14@gmail.com"
       ],
       [ 
        "Nama" => "Ari Setiawan",
        "NIM" => 1217212,
        "Email" => "Ari@gmail.com"
        ]
       ];
// panggila JSON di dalam Json_
    // $data= json_encode($mahasiswa);
    // echo $data;

//panggil JSON diluar/dari database (json_Encode) genreate dari mysql
$dbh =new PDO('mysql:host=localhost; dbname=mahasiswa','root','yoga');
$db= $dbh->prepare('SELECT * FROM identitas');
$db->execute();
$mahasiswa =$db->fetchAll(PDO::FETCH_ASSOC);
$data = json_encode($mahasiswa);
echo $data;

?>