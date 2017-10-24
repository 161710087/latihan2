<?php
require_once 'organisasi.php';

$siswa = new siswa('Aldhit', 'Kiki L', 'Siti A', 'Joko');

echo "Ketua nya.......... ".$organisasi->get_ketua(). "<br>";
echo "Sekretaris nya..... ".$organisasi->get_sekretaris(). "<br>";
echo "Pembendaharan nya.. ".$organisasi->get_bendahara()."<br>";
echo "Staf-Staf lain nya. ".$organisasi->get_staf();
?>