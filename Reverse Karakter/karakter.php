<!DOCTYPE html>
<html>
<body>
<h3>Program sederhana untuk membalikan karakter inputan</h3>
<form action="" method="get">
Inputan <input type="text" name="inputan"><br>
<input type="submit" value="eksekusi">
</form>

<?php
/* Membuat fungsi untuk membalikan inputan dari form
*
*/
function kebalikan(){
$data = $_GET["inputan"]; //membuat variabel string dengan mengambil data dari name="inputan"
$reverse = ''; //varible kosong untuk menampung karakter
$i = 0; 
	while(!empty($data[$i])){ 
	      $reverse = $data[$i].$reverse; 
	      $i++;
	}
	echo $reverse;
}
?>
<form>Output : <?php kebalikan(); ?></form>
</body>
</html> 