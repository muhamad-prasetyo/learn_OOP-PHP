<?php 

    class Mobil {
        // property atau variable 
        public $name = "Mitshubishi";
        protected $tahunMobil = 1;
        
        // method set ini untuk menset dan menvalidasi umur dari kendaraan
        public function setTahunMobil($parametertahun) {

            if($parametertahun > 8) {
                throw new Exception("Tahun Mobil sudah lebih dari 8 Tahun");                
            }
            
            $this->tahunMobil = $parametertahun;

        }

        // method get ini untuk mengambil nilai dari variabel TahunMobil
        public function getTahunMobil() {
            return $this->tahunMobil;
        }
    }

$mobil = new Mobil();
$mobil->setTahunMobil(5);
// $mobil->tahunMobil = 10;
echo $mobil->getTahunMobil();



