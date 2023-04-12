<?php 
// Buat class

class bmiPasien {
    // buat property
    public $nama, $berat, $tinggi, $umur, $jk;

    // bikin construct : data diset user
    function __construct($nama, $berat, $tinggi, $umur,$jk) {
        // masukkin data ke property
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->umur = $umur;
        $this->jk = $jk;


    }

    // buat method (fungsi)
    public function hasilBMI() {
        // buat data tinggi dalam meter
        $tinggi_m = $this->tinggi / 100;
        // buat rumus bmi
        $bmi = $this->berat / ($tinggi_m * $tinggi_m);
        // balikin data
        return round($bmi);
    }

    // buat method status bmi
    public function statusBMI() {
        // simpan data bmi
        $bmi = $this->hasilBMI();
        // cek data jadi status
        if ($bmi < 18.5) {
            return "kekurangan Berat Badan";
        } 
        elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Normal (ideal)";
        }
        elseif ($bmi >= 25 && $bmi <= 29.9) {
            return "Kelebihan Berat Badan";
        }
        else {
            return "Kegemukan (Obesitas)";
        }
        
    
    }
}


// buat objek
// $pasien = new bmiPasien("Henyati Hasim", "58", "157", "20", "P");

// // tampilin data
// echo $pasien->nama . "<br>";
// echo $pasien->berat . "<br>";
// echo $pasien->tinggi . "<br>";
// echo $pasien->umur . "<br>";
// echo $pasien->jk . "<br>";
// echo $pasien->hasiLBMI() . "<br>";
// echo $pasien->statusBMI() . "<br>";


?>