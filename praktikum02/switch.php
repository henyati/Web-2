<?php 

// Buat switch
$grade = "A";
$predikat;

switch ($grade) {
    case 'A':
        $predikat = "Sangat Memuaskan";
        break;

    case 'B':
        $predikat = "Memuaskan";
        break;    
    
    case 'C':
        $predikat = "Cukup";
        break;   

    case 'D':
        $predikat = "Kurang";
        break;  
        
    case 'D':
        $predikat = "Sangat Kurang";
        break; 
        
    default:
        $predikat = "Tidak Ada";
        break;
}

?>