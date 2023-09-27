<?php

class home_model extends CI_Model {

	function GetDetail($id_produk){
		return $this->db->get_where('tbl_produk',['id_produk'=>$id_produk])->row_array();
	}

	function GetKontak() {
		return $this->db->query("select * from tbl_kontak");
	}

	function GetSosialMedia() {
		return $this->db->query("select * from tbl_sosial_media");
	}

	function GetBrand() {
		return $this->db->query("select * from tbl_brand order by id_brand desc");
	}

	function GetKategori() {
		return $this->db->query("select * from tbl_kategori order by id_kategori desc");
	}

	function GetProduk() {
		return $this->db->query("select a.*,b.*,c.* from tbl_produk a join tbl_brand b on a.brand_id=b.id_brand join tbl_kategori c on a.kategori_id=c.id_kategori order by id_produk desc limit 0,6 ");
	}

	function GetRandomProduk() {
		return $this->db->query("select a.*,b.*,c.* from tbl_produk a join tbl_brand b on a.brand_id=b.id_brand join tbl_kategori c on a.kategori_id=c.id_kategori order by RAND('id_produk') asc limit 0,3 ");
	}

	function GetRandomActiveProduk() {
		return $this->db->query("select a.*,b.*,c.* from tbl_produk a join tbl_brand b on a.brand_id=b.id_brand join tbl_kategori c on a.kategori_id=c.id_kategori order by RAND('id_produk') desc limit 0,3 ");
	}

	function GetTentangKami(){
		return $this->db->query("select * from tbl_tentangkami");
	}

	function InsertHubungiKami($nama,$email,$hp,$alamat,$pesan,$tanggal) {
		return $this->db->query("insert into tbl_hubungikami values('','$nama','$email','$hp','$alamat','$pesan','$tanggal','')");
	}

	function GetProdukKategori($id_kategori) {
		return $this->db->query("select a.*,b.* from tbl_produk a join tbl_kategori b on a.kategori_id=b.id_kategori  where a.kategori_id='$id_kategori' order by a.id_produk desc");
	}

	function GetNamaKategoriId($id_kategori) {
		return $this->db->query("select * from tbl_kategori where id_kategori='$id_kategori'");
	}

	function GetProdukBrand($id_brand) {
		return $this->db->query("select a.*,b.* from tbl_produk a join tbl_brand b on a.brand_id=b.id_brand  where a.brand_id='$id_brand' order by a.id_produk desc");
	}

	function GetNamaBrandId($id_brand) {
		return $this->db->query("select * from tbl_brand where id_brand='$id_brand'");
	}

	function GetProdukCari($cari) {
		return $this->db->query("select a.*,b.*,c.* from tbl_produk a join tbl_kategori b on a.kategori_id=b.id_kategori join tbl_brand c on a.brand_id=c.id_brand where a.nama_produk like '%".$cari."%' or b.nama_kategori like '%".$cari."%' or c.nama_brand like '%".$cari."%' or a.harga like '%".$cari. "%' order by a.id_produk desc"); 
	}

	function GetProdukId($id_produk) {
		return $this->db->query("select a.*,b.*,c.* from tbl_produk a join tbl_kategori b on a.kategori_id=b.id_kategori join tbl_brand c on a.brand_id=c.id_brand where a.id_produk='$id_produk'");
	}

	function cek_kode($tgl)
	{
		$query=$this->db->query("select MAX(kode_transaksi) as kd from tbl_transaksi_header where kode_transaksi like '%$tgl%'");
		return $query;
	}

	function update_dibeli($kd,$bl)
	{
		$query=$this->db->query("update tbl_produk set stok='$bl' where kode_produk='$kd'");
	}

	function simpan_pesanan($datainput)
	{
		$q = $this->db->query($datainput);
	}

	function InsertTransaksiHeader($kode_trans,$penerima,$email,$alamat,$no_telepon,$propinsi,$kota,$kode_pos,$jasapengiriman_id) {
		return $this->db->query("insert into tbl_transaksi_header values('','$kode_trans','$penerima','$email','$alamat','$no_telepon','$propinsi','$kota','$kode_pos','$jasapengiriman_id','')");
	}
}