<?php
function palindrom($str){
	$output = false;
	if(strrev($str) == $str){
		$output = true;
      
	}
	return $output;
}

//echo palindrome(13);

function palindrome_angka($angka){
	if($angka >= 1 && $angka <=8){
		return $angka+1;
	}
	if (palindrome($angka)) {
		$angka++;
	}
	while (palindrome ($angka) == false) {
		$angka++;
	}
	return $angka;
}
 	
 	echo palindrome_angka(8); // 9
	echo palindrome_angka(10); // 11
	echo palindrome_angka(117); // 121
	echo palindrome_angka(175); // 181
	echo palindrome_angka(1000); // 1001
	


?>