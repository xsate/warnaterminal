<?php
require_once("fungsinya.php");
define("br","\n");

if(isset($argv[1])){
	$kata	= $argv[1];
	$warna	= $argv[2]??'hitam'; 

}else{
	echo "Masukkan Kata2nya \n >> ";	
	$kata 	=  trim(fgets(STDIN));

	echo "Warnanya apa ? \n >> ";
	$warna	= trim(fgets(STDIN));
}
	
$cetak 	= new WarnaKu($kata, $warna);
echo $cetak;
?>
