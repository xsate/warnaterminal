<?php
/*
Created : Fauzi
Git Hub	: https://github.com/xsate/warnaterminal
Title 	: Warna Ansii 
Support	: Black30, Red31, Green32, Yellow33, Blue34, Purple35, Cyan36, White37 
*/

// Format Penulisan "\033[Parameternya Isi String nya \033[0m"
class setWarna{
	public static $warna = ['Hitam','Merah','Hijau','Kuning','Biru','Ungu','Cyan','Putih'];
	protected function warnaText(){
			
	}
	protected function BUI(){
	// bold underline italic
		
	}
	
}
class WarnaKu
{
	public  $kata,
		$TextColor,
		$BUI,
		$pilihWarna;
	protected $cetakWarna;

	function __construct($kata,$warna,$BUI=''){
		$this->kata = $kata;
		$this->pilihWarna = $warna;
	}
	private function SetArrayWarna($untuk='text'){
		$mulaidari = 90;		
		if($untuk == 'bg'){
			$mulaidari = 40;			
		}
		$this->warna = [$mulaidari => 'hitam','merah','hijau',
			 	'kuning','biru','ungu',
				'cyan', 'putih'];
	}
	private function SetArrayBUI(){
		$a	= [0 => 'normal', 1 => 'bold', 4 => 'underline'];	
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
	function getWarna(){
		$this->SetArrayWarna();
		$this->CariWarna($this->pilihWarna);
		$this->WarnaKu();
	}
	function __tostring(){
		$this->getWarna();
		//return "ok".$this->warna;		
		return "\e[".$this->cetakWarna.$this->kata."\e[0m \n";
	}
}

?>
