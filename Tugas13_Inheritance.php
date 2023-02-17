<?php

class A {
public function Barang() {
	echo "Nama Barang: Pepsi<br>";
	}
}

interface B {
public function Jumlah();
}

class Harga extends A implements B {

	function Jumlah() {
		echo "Jumlah Barang: 110<br>";
	}

	public function totalharga() {
	echo "Harga Barang: Rp. 5000";
	}
}

$astro = new Harga();
$astro->Barang();
$astro->Jumlah();
$astro->totalharga();
?>
