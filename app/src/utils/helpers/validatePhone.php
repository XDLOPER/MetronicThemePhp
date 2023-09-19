<?php 



function validatePhone($phoneNumber) {
    // Türkiye'deki telefon numarası formatına uygunluk kontrolü
    $pattern = "/^\d{10}$/"; // 10 haneli olmalı, örneğin 5412345678
    if (preg_match($pattern, $phoneNumber)) {
        return true; // Geçerli telefon numarası
    } else {
        return false; // Geçersiz telefon numarası
    }
}



?>