<?php 
    // function triangle ($count){
    //     for($i = 1; $i <= $count;$i++){
    //         for($j = 0; $j < $i; $j++){
    //             echo "0";
    //         }
    //         echo "<br>";
    //     }
    // }

    // triangle(15)

// array functions 

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
function rastgele_dizi($dizi, $adet) {
    // Boş elemanları temizle
    $dizi = array_filter($dizi, function ($deger) {
      return $deger !== "";
    });
  
    // Rastgele değerler üret
    $rastgele_deger_dizisi = array_rand($dizi, $adet);
  
    // Yeni diziyi oluştur
    $yeni_dizi = array_map(function ($deger) use ($dizi) {
      return $dizi[$deger];
    }, $rastgele_deger_dizisi);
  
    return $yeni_dizi;
  }
  print_r(rastgele_dizi($planets, 2));
?>
