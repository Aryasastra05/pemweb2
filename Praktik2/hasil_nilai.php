<?php
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];


//buat total
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
$grade;
$predikat;


//buat perhitungan IF untuk mencari grade
if ($total_nilai >= 85) {
    $grade = "A";
}
elseif ($total_nilai >= 70) {
    $grade = "B";
}
elseif ($total_nilai >= 56) {
    $grade = "C";
}
elseif ($total_nilai >= 36) {
    $grade = "D";
}
else {
    $grade = "E";
}

//buat perhitungan switchcase untuk mencari predikat
switch ($grade){
    case "A":
        $predikat = "Sangat Memuaskan";
        break;
    case "B":
        $predikat = "Memuaskan";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    case "D":
        $predikat = "Kurang";
        break;
    case "E":
        $predikat = "Sangat Kurang";
        break;
                           
                
        
        default:
        $predikat = "Tidak Ada";
        break;
}




//cetak hasil:
echo "Nama: $nama <br>";
echo "matkul: $matkul <br>";
echo "NILAI UTS: $nilai_uts <br>";
echo "NILAI UAS: $nilai_uas <br>";
echo "NILAI Tugas: $nilai_tugas <br>";
echo 'Grade:' . $grade .'<br>';
echo 'Predikat:' . $predikat;


?>