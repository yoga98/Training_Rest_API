<?php

$data = file_get_contents('coba.json');
// jika di tambah true akan jadi array, jika tidak akan jadi objek
$mahasiswa = json_decode($data,true);
var_dump($mahasiswa)
?>