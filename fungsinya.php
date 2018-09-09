<?php
/*
Created : Fauzi
Git Hub	: https://github.com/xsate/WarnaBash 
Title 	: Warna Ansii 
Support	: Black30, Red31, Green32, Yellow33, Blue34, Purple35, Cyan36, White37 
*/

// Format Penulisan "\033[Parameternya Isi String nya \033[0m"
// Parameternya adalah:
class WarnaKu
{
	public 	$warna = 'kuning',
	       	$kata  = '',
		$TextColor = 30,
		$BUI   = '';
	function __construct($kata,$warna,$BUI=''){
		$this->kata = $kata;
		$this->BUI = $BUI;
		
		$this->SetArrayWarna();
		$this->CariWarna($warna);
		$this->WarnaKu();
	}
	private function SetArrayWarna(){
		$this->warna = [30 => 'hitam','merah','hijau',
				'kuning','biru','ungu',
				'cyan', 'white'];
	}
	private function CariWarna($warna){
		// (hijau,...) => 32
		$this->TextColor = array_search($warna,$this->warna,true);	
	}
	function WarnaKu(){
		//$ArrayWarna = ['' =>
		// BUI = Bold Underline Italic 
		$warna = "";
		if($this->BUI != ''){
			$warna .= $BUI.';' ;	
		}
		if($this->TextColor != ''){
			$warna .= $this->TextColor.'m' ;	
		}

		$this->warna = $warna;
	}
	function __tostring(){
		return "\e[".$this->warna.$this->kata."\e[0m \n";
	}
	
} 
//$WarnaKu	= new WarnaKu('Sate Kambing','hijau');
//echo ($WarnaKu);
?>
