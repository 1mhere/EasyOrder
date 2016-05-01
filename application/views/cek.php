<!-- <section style="text-align:center"><audio controls>
  <source src="http://localhost/money-format/audio/satu.wav" type="audio/wav">
Browser kamu ga ngedukung nih :(
</audio></section> -->
<!-- <audio width="300" height="32" preload="auto" src="http://localhost/money-format/audio/satu.wav" autoplay="autoplay"></audio> -->


<?php

require ('moneyFormat.php');
$moneyFormat = new moneyFormat();

$angka = 15250970;

/* Format Kurs Rupiah */
$rupiah = $moneyFormat->rupiah($angka);
echo "<h4>Kurs Rupiah</h4>";
echo "Rp. ".$rupiah.""; 

echo "<br>";

/* Format Terbilang*/
$terbilang = $moneyFormat->terbilang($angka);
echo "<h4>Format Terbilang</h4>";
echo "".$terbilang." Rupiah";

/* Memisahkan Kalimat */
$pisah = explode(" ",$terbilang);
foreach ($pisah as $array) {
	echo $array.'<br>';
}

?>

<?php
	for ($i=0; $i < 5; $i++) { 
?>
	<audio preload="auto" src="http://localhost/money-format/audio/<?= $pisah[$i] ;?>.wav" autoplay="autoplay" ></audio>
<?php
}
