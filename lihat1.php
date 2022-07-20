<?php
echo "<head><title>STRUK</title></head>";
$fp = fopen("struct.txt", "r");
echo "<table border='0'>";

while($isi = fgets($fp)) {
	$pisah = explode('|', $isi);
	echo "<tr><td>Nama: </td><td>: $pisah[0] </td></tr>";
	echo "<tr><td>Subject: </td><td>: $pisah[1] </td></tr>";
	echo "<tr><td>Model: </td><td>: $pisah[2] </td></tr>";
	echo "<tr><td>Hari: </td><td>: $pisah[3] </td></tr>";
	echo "<tr><td>Waktu: </td><td>: $pisah[4] </td></tr>";
}

echo "</table";
echo "<a href='index.html'> Home </a>";
?>