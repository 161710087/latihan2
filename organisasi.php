<?php
class organisasi
{
	public $ketua;
	public $sekretaris;
	public $bendahara;
	public $staf;
	function __construct ($ketua, $sekretaris, $bendahara, $staf)
	{
		$this->ketua = $ketua;
		$this->sekretaris = $sekretaris;
		$this->bendahara = $bendahara;
		$this->staf = $staf;
		
	}
	public function get_ketua()
	{
	return $this->ketua;
	}
	public function get_sekretaris()
	{
	return $this->sekretaris;
	}
	public function get_bendahara()
	{
	return $this->bendahara;
	}
	public function get_staf()
	{
	return $this->staf;
	}

}
?>
