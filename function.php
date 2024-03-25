<?php 
// function perjumlahan(){
// echo "perjumlahan + pengurangan";
// }
// perjumlahan();
// perjumlahan();
// perjumlahan();

// echo "<br>";
// echo "<br>";
// echo "perjumlahan + pengurangan";
// echo "perjumlahan + pengungan";
// echo "<br>";
// echo "<br>";

$a=10;
function pengurangan($nilai1,$nilai2=1){
    echo $nilai1-$nilai2;
    echo "<br>";
}
pengurangan($a,5); //5
pengurangan(15,10); //5
pengurangan(20,10);//10
pengurangan(20,10);//10



echo "<p>----------------latihan 1  ------------";
echo "<br>";
function jumlah($nilai1,$nilai2,$nilai3){
echo $nilai1+$nilai2+$nilai3;
}
jumlah(1,2,3);

function luaspersegi($panjang,$lebar){
    echo $panjang*$lebar;
}
luaspersegi(10,10);

function keliling($dua,$panjang,$lebar){
    echo $dua*($panjang+$lebar);
}
keliling(2,10,10);
echo "<br>";


function pembagian($nilai1,$nilai2){
  return $nilai1/$nilai2; //100 / 10 =10
}
function tambah($nilai1,$nilai2){
    $hasil= $nilai1+$nilai2; //20
    return $hasil;
}
echo pembagian(100,10);
echo "<br>";

$hasil=tambah(10,10);
$pembagian=pembagian(50,5);
echo $hasil;
echo "<br>";
echo $pembagian;
echo "<br>";

echo "-----------------------------";
echo "<br>";
function siswa($nama){
    return $nama." pratama";
}
echo siswa('adit');
