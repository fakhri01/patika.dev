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

// $planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
// function rastgele_dizi($dizi, $adet) {
//     // Boş elemanları temizle
//     $dizi = array_filter($dizi, function ($deger) {
//       return $deger !== "";
//     });
  
//     // Rastgele değerler üret
//     $rastgele_deger_dizisi = array_rand($dizi, $adet);
  
//     // Yeni diziyi oluştur
//     $yeni_dizi = array_map(function ($deger) use ($dizi) {
//       return $dizi[$deger];
//     }, $rastgele_deger_dizisi);
  
//     return $yeni_dizi;
//   }
//   print_r(rastgele_dizi($planets, 2));

$number = $_POST["number"];

function divideByThree($number)
{
  if (empty($number)) {
    return "deger bosh olamaz";
  }
  if ($number % 3 == 0) {
    return "Girdiğiniz değer $number, 3'e bölünebilir.";
  } else {
    return "Girdiğiniz değer $number, 3'e bölünemez. 3'e bölünebilen ilk değer 6'dir.";
  }
}

$result = divideByThree($number);

echo $result;
?>
