<?php 
define('__SANSUR', 'puşt,ibne,çakal,kerata');
function sansur($dosya,$metin) { 
$words = explode(",", $dosya); 
$replace = array(); 
foreach ($words as $key => $word) 
{ 
    $words[$key] = "/{$word}/i"; 
    $replace[]   = "(sansür)"; 
} 
echo preg_replace($words, $replace, $metin); 
} 
$metin = 'Bu kerata size karşı bir çakallık mı yaptı? Ben o ibneye gereken cezayı veririm merak etmeyin.';
sansur(__SANSUR,$metin);
?>
