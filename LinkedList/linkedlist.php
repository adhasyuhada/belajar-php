<?php
// membuat class Honda
class Honda{
	public $mobil;
	public $next;
	function __construct($mobil){
		$this->mobil = $mobil;
		$this->next = NULL;
	}
}

// membuat class LinkedList
class LinkedList{
	public $head;
	function __construct(){
		$this->head = NULL;
	}
	public function insert($mobil){
		$link = new Honda($mobil);
		$link->next = $this->head;
		$this->head = &$link;
	}
}
//membuat variabel baru untuk input data ke linked list
$m = new LinkedList();
$m->insert('Brio');		// input string Brio
$m->insert('Jaz'); 		// input string Jaz
$m->insert('Mobilio');	// input string Mobilio
$m->insert('Freed');	// input string Freed
$m->insert('CR-V');		// input string CR-V

echo "<h3>Daftar Mobil Merk Honda</h3>";
echo "<br />";
echo $m->head->mobil; 							//Output CR-V
echo "&nbsp; => ";
echo $m->head->next->mobil; 					//Output Freed
echo "&nbsp; => ";
echo $m->head->next->next->mobil; 				//Output Mobilio
echo "&nbsp; => ";
echo $m->head->next->next->next->mobil; 		//Output Jaz
echo "&nbsp; => ";
echo $m->head->next->next->next->next->mobil; 	//Output Brio

?>