Hari 3 – Berlatih PHP Bagian 3

1. Palindrome Angka
Buatlah sebuah file dengan nama palindrome-angka.php. Di dalam file tersebut buatlah sebuah function dengan nama palindrome_angka yang menerima sebuah parameter berupa integer. function tersebut memproses angka tersebut dan mengembalikan angka selanjutnya yang merupakan sebuah palindrome. contoh jika parameter nya angka 38 maka function akan mereturn 44 yang merupakan angka palindrome. Jika parameter yang diberikan merupakan sebuah angka palindrome, maka function me-return angka selanjutnya yang merupakan palindrome. Contoh jika parameter nya angka 6 maka akan mereturn angka 7 yang merupakan palindrome selanjutnya. (Note: angka 0 sampai 9 adalah palindrome)

<?php

function palindrome_angka($angka) {
  // tulis kode di sini
}

// TEST CASES
echo palindrome_angka(8) // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>
2. Papan Catur
Buatlah sebuah file dengan nama papan-catur.php. Tulislah di dalam file tersebut sebuah function dengan nama papan_catur yang menerima parameter angka. function tersebut akan mereturn string yang membentuk sebuah papan catur dengan simbol pagar “#” dengan ukuran angka x angka.

<?php

function papan_catur($angka) {
// tulis kode di sini
}

// TEST CASES
echo papan_catur(4) 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8)
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #

echo papan_catur(5) 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
3. Pasangan Terbesar
buatlah sebuah file dengan nama pasangan-terbesar.php. Di dalam file tersebut buatlah function dengan nama pasangan_terbesar yang menerima sebuah parameter berupa angka dan akan mengembalikan pasangan angka yang merupakan angka terbesar. Contoh jika parameternya adalah 16749549 maka function me-return 95 karena angka tersebut adalah pasangan angka terbesar.

<?php
function pasangan_terbesar($angka){
// kode di sini
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>
4. Cari Mean
buatlah file dengan nama cari-mean.php. Di dalam file tersebut buatlah sebuah function dengan nama cari_mean yang menerima parameter berupa array berisi angka-angka. function akan mengembalikan nilai mean atau rata-rata dari kumpulan angka pada array tersebut. Contohnya jika parameternya [1,2,3,4,5] maka function akan me-return angka 3 yang merupakan nilai rata-rata dari data di dalam array tersebut.

<?php

function cari_mean($arr){
//kode di sini
}

TEST CASE 
echo cari_mean([1, 2, 3, 4, 5]); // 3
echo cari_mean([3, 5, 7, 5, 3]); // 5
echo cari_mean([6, 5, 4, 7, 3]); // 5
echo cari_mean([1, 3, 3]); // 2
echo cari_mean([7, 7, 7, 7, 7]); // 7

?>
5. Tentukan Deret Aritmatika
buatlah file dengan nama tentukan-deret-aritmatika.php. Di dalam file tersebut buatlah sebuah function dengan nama tentukan_deret_aritmatika yang menerima parameter berupa array berisi angka-angka. function akan mengecek apakah kumpulan angka pada array tersebut merupakan suatu deret aritmatika atau bukan. Jika merupakan deret aritmatika maka function me-return true, selain itu maka me-return false. Contoh jika parameternya [1, 3, 5, 7] maka function akan me-return true karena array tersebut adalah deret aritmatika dengan beda 2.

<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>
6. Tentukan Deret Geometri
buatlah sebuah file dengan nama tentukan-deret-geometri.php. Di dalam file tersebut buatlah function dengan nama tentukan_deret_geometri yang menerima parameter berupa array berisi angka-angka. function akan me-return true jika kumpulan angka tersebut adalah sebuah deret geometri dan me-return false jika bukan merupakan deret geometri. Contohnya jika parameternya [2, 6, 18, 54] akan me-return true karena deret angka tersebut merupakan deret geometri dengan rasio 3.

<?php
function tentukan_deret_geometri($arr) {
// kode di sini
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>
7. Ubah Huruf
buatlah sebuah file dengan nama ubah-huruf.php. Di dalam file tersebut buatlah sebuah function dengan nama ubah_huruf yang menerima parameter berupa string. function akan mereturn string yang berisi karakter-karakter yang sudah diubah dengan karakter setelahnya dalam susunan abjad “abdcde …. xyz”. Contohnya karakter “a” akan diubah menjadi “b” karakter “x” akan berubah menjadi “y”, dst.

<?php
function ubah_huruf($string){
//kode di sini
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>
8. Tukar Besar Kecil
buatlah sebuah file dengan nama tukar-besar-kecil.php. Di dalam file tersebut buatlah function dengan nama tukar_besar_kecil yang menerima parameter berupa string. function akan mengembalikan sebuah string yang sudah ditukar ukuran besar dan kecil per karakter yang ada di parameter. Contohnya jika parameter “pHp” maka akan mengembalikan “PhP”.

<?php
function tukar_besar_kecil($string){
//kode di sini
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>
9. Skor Terbesar
buatlah sebuah file dengan nama skor-terbesar.php. Di dalam file tersebut buatlah sebuah function dengan nama skor_terbesar yang menerima parameter berupa array berisi array asosiatif data penilaian peserta bootcamp. function akan me-return sebuah array asosiatif yang berisi siswa dengan nilai tertinggi di masing-masing kelas.

<?php
function skor_terbesar($arr){
//kode di sini
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>
