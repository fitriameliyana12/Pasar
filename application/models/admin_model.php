<?php

class admin_model extends CI_Model
{

	function CekAdminLogin($username, $password)
	{
		$ceklogin = $this->db->query("select * from tbl_admin where username='$username' and password='$password'");

		if (count($ceklogin->result()) > 0) {

			foreach ($ceklogin->result() as $value) {
				$sess_data['logged_in'] 	= 'LoginOke';
				$sess_data['id_admin']  	= $value->id_admin;
				$sess_data['nama_admin']  	= $value->nama_admin;
				$sess_data['username']  	= $value->username;
				$sess_data['password']  	= $value->password;
				$sess_data['email']  		= $value->email;
				$sess_data['phone']  		= $value->phone;
				$sess_data['hak_akses']  	= $value->hak_akses;

				$this->session->set_userdata($sess_data);
			}
			redirect("adminweb/home");
		} else {
			$this->session->set_flashdata("error", "Username atau Password Anda Salah!");
			redirect('adminweb/index');
		}
	}

	//Awal kontak
	function Getkontak()
	{
		return $this->db->query("select * from tbl_kontak");
	}

	function Simpankontak($id_kontak, $alamat, $phone, $email)
	{
		return $this->db->query("update tbl_kontak set alamat='$alamat',phone='$phone',email='$email' where id_kontak='$id_kontak' ");
	}
	//Akhir kontak

	//Awal Sosial Media
	function GetSosialMedia()
	{
		return $this->db->query("select * from tbl_sosial_media");
	}
	function SimpanSosialMedia($id_sosial_media, $tw, $fb, $gp)
	{
		return $this->db->query("update tbl_sosial_media set tw='$tw',fb='$fb',gp='$gp' where id_sosial_media='$id_sosial_media' ");
	}
	//Akhir Sosial Media

	//Awal Kategori
	function GetKategori()
	{
		return $this->db->query("select * from tbl_kategori order by id_kategori desc");
	}

	function KategoriSama($nama_kategori)
	{
		return $this->db->query("select * from tbl_kategori where binary(nama_kategori)='$nama_kategori' ");
	}

	function KategoriSimpan($nama_kategori)
	{
		return $this->db->query("insert into tbl_kategori values('','$nama_kategori')");
	}

	function DeleteKategori($id_kategori)
	{
		return $this->db->query("delete from tbl_kategori where id_kategori='$id_kategori'");
	}

	function GetEditKategori($id_kategori)
	{
		return $this->db->query("select * from tbl_kategori where id_kategori='$id_kategori'");
	}
	function KategoriUpdate($id_kategori, $nama_kategori)
	{
		return $this->db->query("update tbl_kategori set nama_kategori='$nama_kategori' where id_kategori='$id_kategori'");
	}
	//Akhir Kategori

	//Awal Brand
	function GetBrand()
	{
		return $this->db->query("select * from tbl_brand order by id_brand desc");
	}

	function BrandSama($nama_brand)
	{
		return $this->db->query("select * from tbl_brand where binary(nama_brand)='$nama_brand' ");
	}

	function BrandSimpan($nama_brand)
	{
		return $this->db->query("insert into tbl_brand values('','$nama_brand')");
	}

	function DeleteBrand($id_brand)
	{
		return $this->db->query("delete from tbl_brand where id_brand='$id_brand'");
	}

	function GetEditBrand($id_brand)
	{
		return $this->db->query("select * from tbl_brand where id_brand='$id_brand'");
	}
	function BrandUpdate($id_brand, $nama_brand)
	{
		return $this->db->query("update tbl_brand set nama_brand='$nama_brand' where id_brand='$id_brand'");
	}
	//Akhir Brand

	//Awal Tentang Kami
	function GetTentangkami()
	{
		return $this->db->query("select * from tbl_tentangkami");
	}

	function UpdateTentangkami($id_tentangkami, $judul, $deskripsi)
	{
		return $this->db->query("update tbl_tentangkami set judul='$judul',deskripsi='$deskripsi' where id_tentangkami='$id_tentangkami'");
	}
	//Akhir Tentang Kami

	//Awal admin
	function Getadmin()
	{
		return $this->db->query("select *from tbl_admin order by id_admin desc");
	}

	function Deleteadmin($id)
	{
		return $this->db->query("delete from tbl_admin where id_admin='$id'");
	}

	function GetadminEdit($id)
	{
		return $this->db->query("select * from tbl_admin where id_admin='$id' ");
	}
	//Akhir admin

	//Awal produk
	function GetProduk()
	{
		return $this->db->query("select a.*,b.nama_brand,c.nama_kategori from tbl_produk a join tbl_brand b on a.brand_id=b.id_brand join tbl_kategori c on a.kategori_id=c.id_kategori order by a.id_produk desc");
	}

	function GetMaxKodeProduk()
	{

		$query = $this->db->query("select MAX(RIGHT(kode_produk,5)) as kode_produk from tbl_produk");
		$kode = "";
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $tampil) {
				$kd = ((int) $tampil->kode_produk) + 1;
				$kode = sprintf("%05s", $kd);
			}
		} else {
			$kode = "00001";
		}
		return "AMX" . $kode;
	}

	function DeleteProduk($id_produk)
	{
		return $this->db->query("delete from tbl_produk where id_produk='$id_produk' ");
	}

	function EditProduk($id_produk)
	{
		return $this->db->query("select * from tbl_produk where id_produk='$id_produk' ");
	}
	//Akhir Produk
}