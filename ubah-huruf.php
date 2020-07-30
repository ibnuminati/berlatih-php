<?php
$abjad = "abcdefghijklmnopqrstuvwxyz"
$output = "";

function ubah_huruf($string){
	for($i=0; $i < strlen($string); $i++){
	$position = strrpos($abjad, substr[$i];
	$output .= substr($abjad, $position+1, 1);
	}
	return $output;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>
