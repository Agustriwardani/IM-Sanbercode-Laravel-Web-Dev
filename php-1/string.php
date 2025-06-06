<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>

<body>
    <h1>Berlatih String PHP</h1>
    <?php
    echo "<h3> Soal No 1</h3>";
    /* 
            SOAL NO 1
            Tunjukan dengan menggunakan echo berapa panjang dari string yang diberikan berikut! Tunjukkan juga jumlah kata di dalam kalimat tersebut! 

            Contoh: 
            $string = "PHP is never old";
            Output:
            Panjang string: 16, 
            Jumlah kata: 4 
        */

    $first_sentence = "Hello PHP!"; // Panjang string 10, jumlah kata: 2
    $first_length = strlen($first_sentence);
    $first_word_count = str_word_count($first_sentence);

    echo "Kalimat Pertama: $first_sentence <br>";
    echo "Panjang string: $first_length, Jumlah kata: $first_word_count <br>";


    $second_sentence = "I'm ready for the challenges"; // Panjang string: 28,  jumlah kata: 5
    $second_length = strlen($second_sentence);
    $second_word_count = str_word_count($second_sentence);
    echo "<br>";

    echo "Kalimat Pertama: $second_sentence <br>";
    echo "Panjang string: $second_length, Jumlah kata: $second_word_count <br>";


    echo "<h3> Soal No 2</h3>";
    /* 
            SOAL NO 2
            Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. 
            
            
        */
    $string2 = "I love PHP";

    echo "<label>String: </label> \"$string2\" <br>";
    echo " <br> Kata pertama: " . substr($string2, 0, 1) . "<br>";
    // Lanjutkan di bawah ini

    echo "Kata kedua: " . substr($string2, 2, 4) . "<br>";
    echo "Kata Ketiga: " . substr($string2, 7, 3) . "<br>";

    echo "<h3> Soal No 3 </h3>";
    /*
            SOAL NO 3
            Mengubah karakter atau kata yang ada di dalam sebuah string.
        */
    $string3 = "PHP is old but sexy!";
    echo "String: \"$string3\" ";
    // OUTPUT : "PHP is old but awesome"

    $kata = str_replace("old", "awesome", $string3);

    echo " <br> String setelah perubahan: \"$kata\"";
    ?>
</body>

</html>