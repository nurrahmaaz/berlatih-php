<?php
function ubah_huruf($string){
//kode di sini
// 1. buat manual dulu abjad
// 2. looping per karakter pada parameter string
// 3. tampung ke variabel penampung: karakter pada posisi $i + alpabet
// 4. return penampung

	$abjad = "abcdefghijklmnopqrstuvwxyz";
	$outup = "";
	for ($i=0; $i <strlen($string) ; $i++) { 
		$posisi = strrpos($abjad, $string[$i]);
		$outup .= substr($abjad, $posisi + 1, 1);
	}
	return $outup;
}

// TEST CASES
echo "<br>" .ubah_huruf('wow'); // xpx
echo "<br>" .ubah_huruf('developer'); // efwfmpqfs
echo "<br>" .ubah_huruf('laravel'); // mbsbwfm
echo "<br>" .ubah_huruf('keren'); // lfsfo
echo "<br>" .ubah_huruf('semangat'); // tfnbohbu

?>