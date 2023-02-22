
<?php 
abstract class Toko{
	abstract function namaBarang();
	abstract function hargaBarang();
	abstract function jumlahBarang();
}
 
class Barang extends Toko{
	public function namaBarang()
	{
		return 'Oreo';
	}
	public function hargaBarang()
	{
		return 'Rp. 2000';
	}
	public function jumlahBarang()
	{
		return '456';
	}
    public function panggil(){
        return 'Nama Barang: '.$this->namaBarang().'<br>'.'Harga Barang: '.$this->hargaBarang().'<br>'.'Julah Barang: '.$this->jumlahBarang();
    }
}

 
$data = new Barang();
echo $data->panggil();