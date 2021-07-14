<?php 

    class Kendaraan {
        private $warna = "putih";
        public $mesin = 1000;

        public function setWarna($paramWarna) {
            $this->warna = $paramWarna;
        }

        public function getWarna(){
            return $this->warna;
        }

        public function setMesin($paramMesin) {
            $this->mesin = $paramMesin;
        }

        public function getMesin() {
            return $this->mesin;
        }

    }

    class Cars extends Kendaraan {
        private $temperatur_AC = 0;

        public function __construct()
        {
            
        }

        public function setTempraturAc($paramTempratur) 
        {
            $this->temperatur_AC = $paramTempratur;
        }

        public function getTempraturAc()
        {
            return $this->temperatur_AC;
        }
    }

    class AirPlant extends Kendaraan {
        private $JetTurbo = true;

        public function setJetTurbo($paramJetTurbo)
        {
            $this->JetTurbo = $paramJetTurbo;
        }

        public function getJetTurbo() 
        {
            return $this->JetTurbo;
        }

    }

    class KapalLaut extends Kendaraan {
        private $cargoAwak = 1000;

    public function setCargoAwak($paramCargoAwak)
    {
        $this->cargoAwak = $paramCargoAwak;
    }

    public function getCargoAwak()
    {
        return $this->cargoAwak;
    }

    }

    $mobil = new Cars();
    $mobil->setWarna('Merah');
    $mobil->setMesin('3000');
    $mobil->setTempraturAc(14);
    echo "Mobil berwarna " . $mobil->getWarna() . " dengan mesin " . $mobil->getMesin() . " dan memiliki pengatur temperature  AC yang bisa dingin sampai " . $mobil->getTempraturAc() . " derajar Celcius.";

    echo "<hr>";

    $JetTempur = new AirPlant();
    $JetTempur->setwarna("Hitam");
    $JetTempur->setMesin("10000");
    $JetTempur->setJetTurbo(true);
    echo "Pesawat Jet " . $JetTempur->getWarna() . " dengan Mesin bertenaga " . $JetTempur->getMesin() . " dilengkapi Turbo " . $JetTempur->getJetTurbo();

    echo "<hr>";

    $kapalPesiar = new KapalLaut();
    $kapalPesiar->setWarna("Putih Cerah");
    $kapalPesiar->setMesin("15000");
    $kapalPesiar->setCargoAwak("5000");
    echo "Kapal Laut Pesiar " . $kapalPesiar->getWarna() . " dengan mesin bertenaga sangat besar " . $kapalPesiar->getMesin() . " dan dapat menampung Awak serta penumpang hingga " . $kapalPesiar->getCargoAwak() . " Awak serta Penumpang.";