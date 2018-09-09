<?php
/*
Created : Fauzi
Git Hub	: https://github.com/xsate/warnaterminal
Title 	: Warna Ansii 
Support	: Black30, Red31, Green32, Yellow33, Blue34, Purple35, Cyan36, White37 
*/

// Format Penulisan "\033[Parameternya Isi String nya \033[0m"
class WarnaKu
{
	public 	
	       	$kata  = '',
		$TextColor = 30,
		$BUI   = '',
		$cetakWarna = '';
	function __construct($kata,$warna,$BUI=''){
		$this->kata = $kata;
		
		$this->SetArrayWarna();
		$this->CariWarna($warna);
		$this->WarnaKu();
	}
	private function SetArrayWarna(){
		$this->warna = [90 => 'hitam','merah','hijau',
			 	'kuning','biru','ungu',
				'cyan', 'putih'];
	}
	private function CariWarna($warna){
		$this->TextColor = array_search($warna,$this->warna,true);	
	}
	function WarnaKu(){
		$warna = "";
		if($this->BUI != ''){
			$warna .= $BUI.';' ;	
		}
		if($this->TextColor != ''){
			$warna .= $this->TextColor.'m' ;	
		}
		$this->cetakWarna = $warna;
	}
	function __tostring(){
		//$this->warna;		
		return "\e[".$this->cetakWarna.$this->kata."\e[0m \n";
	}
}

?>
