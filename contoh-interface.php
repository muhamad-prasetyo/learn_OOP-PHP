<?php 

    interface Buah {
        public function warna();
    }

    class Apel implements Buah {
        public function warna{
            return "Merah";
        }
    }


    class Jeruk implements Buah {
        public function warna {
            return "Kuning";
        }
    }