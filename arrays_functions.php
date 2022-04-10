Dizi Fonksiyonları 1

print_r();
Bir değişkenin veya dizinin gösterimini ekrana basar.
var_dump();
Bu işlev bir değişkenin türü ve değeri dahil değişkenle ilgili bilgileri gösterir. Diziler ve nesneler ardışık olarak bileşenlerine ayrılarak tüm yapısı değerleriyle birlikte gösterilir.
explode();
Bir dizgeyi bir ayraca göre bölüp bir dizi haline getirir
implode();
Dizi elemanlarını birleştirip bir dizge elde eder.
count();
Bir dizideki eleman sayısını veya bir nesnedeki şeylerin sayısını döndürür.
is_array();
Değişkenin bir dizi içerip içermediğine bakar

Dizi Fonksiyonları 2

shuffle();
Bir diziyi karıştırır.
$sayılar = range(1, 20);
shuffle($sayılar);
foreach ($sayılar as $sayı) {
    echo "$sayı ";
}
array_combine();
Anahtarlar için bir dizi, değerler için ise başka bir dizi kullanarak bir ilişkisel dizi oluşturur.
<?php
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

print_r($c);
?>
array_count_values();
Bir dizideki tüm değerleri sayar.
<?php
$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));
?>
array_flip();
Bir dizideki anahtarlarla değerleri yer değiştirir.
<?php
$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);

print_r($flipped);
?>
array_key_exists();
Belirtilen anahtar veya indis dizide var mı diye bakar.
<?php
$dizi = array('ilk' => 1, 'ikinci' => 4);
if (array_key_exists('ilk', $dizi)) {
    echo "'ilk' elememanı dizide mevcut";
}
?>
array_map();
Belirtilen dizilerin elemanlarını geriçağırım işlevini uygular.
<?php
function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
print_r($b);
?>
array_filter();
Bir dizinin elemanlarını bir geriçağırım işleviyle süzgeçten geçirir.
<?php
function tek($var)
{
   //tamsayı girdi tek sayı mı diye bakar
    return $var & 1;
}

function cift($var)
{
   //tamsayı girdi çift sayı mı diye bakar
    return !($var & 1);
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo " Tek:\n";
print_r(array_filter($array1, "tek"));
echo "Çift:\n";
print_r(array_filter($array2, "cift"));
?>

---
Tek:
Array
(
    [a] => 1
    [c] => 3
    [e] => 5
)
Çift:
Array
(
    [0] => 6
    [2] => 8
    [4] => 10
    [6] => 12

array_merge();
Belirtilen dizileri ardarda ekleyerek yeni bir dizi oluşturur.
<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
?>
array_rand();
Bir diziden belli sayıda rasgele anahtar döndürür.
<?php
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
?>
array_reverse();
Diziyi tersine sıralayıp döndürür.
<?php
$girdi  = array("php", 4.0, array("green", "red"));
$normal = array_reverse($girdi);
$korunan = array_reverse($girdi, true);

print_r($girdi);
print_r($normal);
print_r($korunan);
 ?>
array_search();
Bir dizide belirtilen değeri arar ve bulursa ilgili ilk anahtarı döndürür.
<?php
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array);   // $key = 1;
?>

Dizi Fonksiyonları 3

in_array();
Bir dizide bir değerin varlığını araştırır.
<?php
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Irix var";
}
if (in_array("mac", $os)) {
    echo "Mac var";
}
?>
array_shift();
Dizini başlangıcından bir eleman çıkarır.
<?php
$deste = array("as", "papaz", "kız", "vale");
$kart = array_shift($deste);
print_r($deste);
?>
array_pop();
Dizinin sonundaki elemanı diziden çıkartır.
<?php
$depo = array("portakal", "muz", "elma", "ahududu");
$meyve = array_pop($depo);
print_r($depo);
?>
array_slice();
Bir dizinin belli bir bölümünü döndürür
<?php
$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      // çıktısı: "c", "d", "e"
$output = array_slice($input, -2, 1);  // çıktısı: "d"
$output = array_slice($input, 0, 3);   // çıktısı: "a", "b", "c"
?>
.
<?php
array_sum($a);
//Bir dizideki değerlerin toplamını hesaplar
$a = array(2, 4, 6, 8);
echo "sum(a) = " . array_sum($a) . "\n";

$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
echo "sum(b) = " . array_sum($b) . "\n";
?>
array_product();

Bir dizideki değerlerin çarpımını bulur.
<?php
$a = array(2, 4, 6, 8);
echo "çarpım(a) = " . array_product($a) . "\n";
echo "çarpım(array()) = " . array_product(array()) . "\n";
?>
array_unique();
Diziden yinelenen değerleri siler.
<?php
$girdi = array("a" => "yeşil", "kırmızı", "b" => "yeşil", "mavi", "kırmızı");
$sonuç = array_unique($girdi);
print_r($sonuç);
?>
array_values();

Bir dizinin tüm değerlerini döndürür.
<?php
$dizi = array("beden" => "XL", "renk" => "sarı");
print_r(array_values($dizi));
?>
array_push();
Belli sayıda elemanı dizinin sonuna ekler.
<?php
$küme = array("elma", "armut");
array_push($küme, "muz", "portakal");
print_r($küme);
?>
array_unshift();
Bir dizinin başlangıcına bir veya daha fazla eleman ekler.
<?php
$liste = array("ayva", "muz");
array_unshift($liste, "elma", "armut");
print_r($liste);
?>
array_keys();
Bir dizideki tüm anahtarları veya bir anahtar altkümesini döndürür.
<?php
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));

$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
print_r(array_keys($array));
?>

Dizi Fonksiyonları 4

current();
Bir dizideki geçerli öğeyi döndür
end();
Bir dizinin dahili işaretçisini son elemanına ayarlar
next();
Bir dizinin dahili işaretçisini ilerletir
prev();
Dahili dizi işaretçisini geri alır.
<?php
$araç = array('tabanvay', 'bisiklet', 'otomobil', 'uçak');
$kip = current($araç); // $kip = 'tabanvay';
$kip = next($araç);    // $kip = 'bisiklet';
$kip = current($araç); // $kip = 'bisiklet';
$kip = next($araç);    // $kip = 'otomobil';
$kip = prev($araç);    // $kip = 'bisiklet';
$kip = end($araç);     // $kip = 'uçak';
$kip = current($araç); // $kip = 'uçak';

$arr = array();
var_dump(current($arr)); // bool(false)

$arr = array(array());
var_dump(current($arr)); // array(0) { }
?>
reset();
Bir dizinin dahili göstericisini ilk elemana konumlar.
extract();
Bir dizideki değişkenleri simge tablosuna dahil eder
<?php

/* Dizinin wddx_deserialize tarafından döndürülen
   bir dizi olduğunu varsayalım */

$boyut = "büyük";
$dizi = array("renk"  => "mavi",
              "boyut" => "orta",
              "şekil" => "küre");
extract($dizi, EXTR_PREFIX_SAME, "wddx");

echo "$renk, $boyut, $şekil, $wddx_boyut\n";

?>

// Çıktısı: mavi, büyük, küre, orta

asort();
Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan küçükten büyüğe doğru sıralar.
<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
?>
arsort();
Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan büyükten küçüğe doğru sıralar.
<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
?>
ksort();

Bir diziyi anahtarlarına göre küçükten büyüğe doğru sıralar.
<?php
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
?>
krsort();
Bir diziyi anahtarlarına göre büyükten küçüğe doğru sıralar.
<?php
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
krsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
?>
<?php

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function myFunction($array, $value)
{
    $filteredArray = array_filter($array);
    $randomizedArray = array_rand($filteredArray, $value);
    $result = array_map(function ($item) use ($filteredArray) {
        return $filteredArray[$item];
    }, $randomizedArray);
    return $result;
}

echo "<pre>";

print_r(myFunction($planets, 2));
print_r(myFunction($planets, 3));
print_r(myFunction($planets, 2));
print_r(myFunction($planets, 4));
print_r(myFunction($planets, 5));