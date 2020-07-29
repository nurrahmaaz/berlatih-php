<?php
function pasangan_terbesar($angka){
// 1. looping sebanyak karakter pada angka
// 2. dapatkan pasangan angka dengan metode substr(metde string)
// 3. pasangan angka pertama diset sebagai terbesar
// 4. selama looping kalau ketemu angka yang lebih besar, terbesarnya di update dgn angka tsb.
// 5. return angka terbesae
$angka_terbesar = substr($angka, 0, 2);
	for ($i=0; $i<=strlen($angka)-2 ; $i++) { 
		$pasangan = substr($angka, $i, 2);
		if ($pasangan > $angka_terbesar) {
			$angka_terbesar = $pasangan;
		}

	}
	return $angka_terbesar;
}

// TEST CASES
echo "<br> <b>Pasangan Terbesar </b>";
echo "<br>" .pasangan_terbesar(641573); // 73
echo "<br>" .pasangan_terbesar(12783456); // 83
echo "<br>" .pasangan_terbesar(910233); // 91
echo "<br>" .pasangan_terbesar(71856421); // 85
echo "<br>" .pasangan_terbesar(79918293); // 99

?>