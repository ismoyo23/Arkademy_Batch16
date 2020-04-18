<?php 

function divideAndSort($angka,$angka_awal,$angka_ganti){
    $i =0; $hasil;
    $panjang = strlen($angka); 	// convert string to array
    while ($i < $panjang) {		// looping using while
        if ($angka[$i] == $angka_awal) {
            $hasil[$i] = $angka_ganti;
            return $hasil[$i];
        }
        else if ($angka[$i] !== $angka_awal){
            $hasil[$i] = $angka[$i];
            return$hasil[$i];
        }
        $i++;
    }
}
echo divideAndSort('5956560159466056','0','');
