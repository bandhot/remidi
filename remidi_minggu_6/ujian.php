<?php
$merk = [
    ["Speda Montor", "Hayabusa", 8000000000,"hayabusa.jpeg"],
    ["Mobil", "Ranger", 10000000000,"ranger.jpg"],
    ["Speda Montor", "CBR 600 f4i", 6000000000,"cbr.jpg"],
    ["Mobil", "Sport",10000000000,"sport.png"],
    ["Speda Montor", "Kawasaki H2",15000000000,"kawasaki.jpg"],
    ["Mobil", "Pajero", 10000000000,"pajero.jpg"],
    ["Speda Montor", "RX-KING",15000000000,"king.jpg"],
    ["Mobil", "Merchendes", 10000000000,"mc.jpg"],
    ["Speda Montor", "GL PRO",15000000000,"gl.jpg"],
    ["Mobil", "Sport", 10000000000,"mo.jpg"],
    ["Speda Montor", "CB",15000000000,"cb.png"],
    ["Mobil", "Sport",10000000000,"mob.jpg"],
    ["Speda Montor", "CB",15000000000,"c.jpg"],
    ["Mobil", "Sport",10000000000,"mobi.jpg"],
    ["Speda Montor", "custom",15000000000,"cu.png"],
    ["Mobil", "Sport",10000000000,"mobil.jpg"],
    ["Speda Montor", "Custom",15000000000,"cus.jpg"],
    ["Mobil", "Kijang",10000000000,"kijang.jpg"],
    ["Speda Montor", "Choper",15000000000,"custom.jpeg"]
];

$temp_arr=[];

// foreach ($merk as $key) {
//     // var_dump($key);
// echo $key[0],$key[1],$key[2],$key[3]."\n";
// }
// $pilihan=array_unique($temp_arr);

// foreach ($pilihan as $value) {
//     echo $value;
// }

foreach($merk as $key){
    $temp_arr[]= $key[0];
}
$post=array_unique($temp_arr);
foreach($post as $key_z){
    echo $key_z."\n";
}

