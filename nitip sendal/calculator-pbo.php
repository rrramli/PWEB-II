<?

// Interface untuk operasi kalkulator
interface KalkulatorOperasi {
    public function hitung($a, $b);
}
// Kelas untuk penjumlahan
class Penjumlahan implements KalkulatorOperasi {
    public function hitung($a, $b) {
        return $a + $b;
    }
}
// Kelas untuk pengurangan
class Pengurangan implements KalkulatorOperasi {
    public function hitung($a, $b) {
        return $a - $b;
    }
}
// Kelas untuk perkalian
class Perkalian implements KalkulatorOperasi {
    public function hitung($a, $b) {
        return $a * $b;
    }
}
// Kelas untuk pembagian
class Pembagian implements KalkulatorOperasi {
    public function hitung($a, $b) {
        if ($b == 0) {
            return "Error: Pembagian oleh nol";
        }
        return $a / $b;
    }
}

// Kelas kalkulator
class Kalkulator {
    public function kalkulasi(KalkulatorOperasi $operasi, $a, $b) {
        return $operasi->hitung($a, $b);
    }
}

// Contoh penggunaan kalkulator
$kalkulator = new Kalkulator();

$penjumlahan = new Penjumlahan();
$hasil1 = $kalkulator->kalkulasi($penjumlahan, 5, 3); // Hasil penjumlahan: 8

$pengurangan = new Pengurangan();
$hasil2 = $kalkulator->kalkulasi($pengurangan, 10, 4); // Hasil pengurangan: 6

$perkalian = new Perkalian();
$hasil3 = $kalkulator->kalkulasi($perkalian, 7, 2); // Hasil perkalian: 14

$pembagian = new Pembagian();
$hasil4 = $kalkulator->kalkulasi($pembagian, 9, 3); // Hasil pembagian: 3
?>