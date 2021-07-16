<?php 
    // CONTOH KE - 1 
    class Orang {
        public static $umur = 5;
    }

    // cara memanggil varibale yg menggunakan static yaitu : :: 
    echo Orang::$umur;


//  ss############################################################################################### 
    echo "<br>";
    //aa ###############################################################################################

    // CONTOH KE - 2 

    // Kekurangan static yaitu karna static tidak akan mengikuti aturan enskapsulation yg ada di dalam oop 

    class Manusia {
        public static $umur = 5;

        // method 
        public function tambahUmur($paramUmur) 
        {
            static::$umur += $paramUmur;
        }
    }

    $john = new Manusia();
    $john->tambahUmur(10);
    $john->tambahUmur(20);

    $heru = new Manusia();
    $heru->tambahUmur(10);

    echo Manusia::$umur;



    // aa########################################################################################################## 
    echo "<br>";
    //aa###########################################################################################################

    // CONTOH KE - 3 
    // Static dan CONSTANTA 

    class Human {
        public static $umur = 5;
        const nama = "Prasetyo";

        public function tambahUmur($paramUmur) 
        {
            static::$umur += $paramUmur;
        }
    }

    $programer = new Human();
    $programer->tambahUmur(15);
    echo Human::nama . " Berumur " . Human::$umur;
