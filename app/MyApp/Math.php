<?php

    namespace App\MyApp;

    class Math {

        public function __construct(){

        }

        static public function terbilang($val) {
            $val        = abs($val);
            $number     = array('', 'Satu', 'Dua', 'Tiga', 'Empat', 'Lima', 'Enam', 'Tujuh', 'Delapan', 'Sembilan', 'Sepuluh', 'Sebelas');
            $temp       = '';
            
            if ($val <12) {
                $temp = ' '. $number[$val];
            } else if ($val <20) {
                $temp = terbilang($val - 10). ' Belas';
            } else if ($val <100) {
                $temp = terbilang($val/10).' Puluh'. terbilang($val % 10);
            } else if ($val <200) {
                $temp = ' Seratus' . terbilang($val - 100);
            } else if ($val <1000) {
                $temp = terbilang($val/100) . ' Ratus' . terbilang($val % 100);
            } else if ($val <2000) {
                $temp = ' Seribu' . terbilang($val - 1000);
            } else if ($val <1000000) {
                $temp = terbilang($val/1000) . ' Ribu' . terbilang($val % 1000);
            } else if ($val <1000000000) {
                $temp = terbilang($val/1000000) . ' Juta' . terbilang($val % 1000000);
            } else if ($val <1000000000000) {
                $temp = terbilang($val/1000000000) . ' Milyar' . terbilang(fmod($val,1000000000));
            } else if ($val <1000000000000000) {
                $temp = terbilang($val/1000000000000) . ' Trilyun' . terbilang(fmod($val,1000000000000));
            }     
                return $temp;
        }
        
    }