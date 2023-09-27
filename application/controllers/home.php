<?php

class home extends CI_controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('home_model');
	}

	public function index() {
		$data['kontak'] 		= $this->home_model->GetKontak();
		$data['sosial_media'] 	= $this->home_model->GetSosialMedia();
		$data['brand'] 			= $this->home_model->GetBrand(); 
		$data['kategori'] 		= $this->home_model->GetKategori(); 
		$data['produk']			= $this->home_model->GetProduk();
		$data['random']			= $this->home_model->GetRandomProduk();
		$data['random_active']	= $this->home_model->GetRandomActiveProduk();

		$this->load->view('home/index',$data);
	}

	public function detail($id_produk)
    {
        $data['title']='Detail';
        $data['tbl_produk']=$this->home_model->getDetail($id_produk);

		$this->load->view('home/detail', $data);
    }

	public function tentang_kami () {
		$data['kontak'] 		= $this->home_model->GetKontak();
		$data['sosial_media'] 	= $this->home_model->GetSosialMedia();
		$data['brand'] 			= $this->home_model->GetBrand(); 
		$data['kategori'] 		= $this->home_model->GetKategori(); 
		$data['tentangkami'] 	= $this->home_model->GetTentangKami();
		$data['produk']			= $this->home_model->GetProduk();
		
		$this->load->view('home/tentang_kami',$data);
	}

	public function hubungi_kami () {
		$data['kontak'] 		= $this->home_model->GetKontak();
		$data['sosial_media'] 	= $this->home_model->GetSosialMedia();
		$data['kategori'] 		= $this->home_model->GetKategori(); 

		$this->load->view('home/hubungi_kami',$data);
	}

	public function hubungi_kami_kirim() {
		$tanggal 	= date('Y-m-d');
		$nama 		= $this->input->post('nama');
		$email 		= $this->input->post('email');
		$hp 		= $this->input->post('hp');
		$alamat 	= $this->input->post('alamat');
		$pesan 		= $this->input->post('pesan');

		$this->home_model->InsertHubungiKami($nama,$email,$hp,$alamat,$pesan,$tanggal);

		$this->session->set_flashdata('sukses','Data Berhasil Dikirim');
		redirect("home/hubungi_kami");
	}

	public function kategori() {
		$id_kategori= $this->uri->segment(3);
		$data['kontak'] 		= $this->home_model->GetKontak();
		$data['sosial_media'] 	= $this->home_model->GetSosialMedia();
		$data['brand'] 			= $this->home_model->GetBrand(); 
		$data['kategori'] 		= $this->home_model->GetKategori(); 
		$data['nama_kategori']  = $this->home_model->GetNamaKategoriId($id_kategori);

			$page=$this->uri->segment(4);
			$limit=12;
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			
			$data['tot'] = $offset;
			$tot_hal = $this->home_model->GetProdukKategori($id_kategori);
			$config['base_url'] = base_url() . 'home/kategori/'.$id_kategori.'/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 4;
			$config['first_link'] = 'Awal';
	        $config['last_link'] = 'Akhir';
	        $config['next_link'] = 'Selanjutnya';
	        $config['prev_link'] = 'Sebelumnya';
	        $config['full_tag_open'] = '<ul class="pagination">';
	        $config['full_tag_close'] = '</ul>';

	        $config['first_link'] = 'Awal';
	        $config['first_tag_open'] = '<li class="prev page">';
	        $config['first_tag_close'] = '</li>';

	        $config['last_link'] = 'Akhir';
	        $config['last_tag_open'] = '<li class="next page">';
	        $config['last_tag_close'] = '</li>';

	        $config['next_link'] = 'Selanjutnya';
	        $config['next_tag_open'] = '<li class="next page">';
	        $config['next_tag_close'] = '</li>';

	        $config['prev_link'] = 'Sebelumnya';
	        $config['prev_tag_open'] = '<li class="prev page">';
	        $config['prev_tag_close'] = '</li>';

	        $config['cur_tag_open'] = '<li class="active"><a href="">';
	        $config['cur_tag_close'] = '</a></li>';

	        $config['num_tag_open'] = '<li class="page">';
	        $config['num_tag_close'] = '</li>';

			$this->pagination->initialize($config);
			$data["paginator"] =$this->pagination->create_links();
			
			$data['produk_kategori'] = $this->db->query("select a.*,b.* from tbl_produk a join tbl_kategori b on a.kategori_id=b.id_kategori  where a.kategori_id='$id_kategori' order by a.id_produk desc 
			LIMIT ".$offset.",".$limit."");

		$this->load->view('home/kategori',$data);
	}

	public function brand() {
		$id_brand= $this->uri->segment(3);
		$data['kontak'] 		= $this->home_model->GetKontak();
		$data['sosial_media'] 	= $this->home_model->GetSosialMedia();
		$data['brand'] 			= $this->home_model->GetBrand(); 
		$data['kategori'] 		= $this->home_model->GetKategori(); 
		$data['nama_brand']  = $this->home_model->GetNamaBrandId($id_brand);

			$page=$this->uri->segment(4);
			$limit=12;
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			
			$data['tot'] = $offset;
			$tot_hal = $this->home_model->GetProdukBrand($id_brand);
			$config['base_url'] = base_url() . 'home/brand/'.$id_brand.'/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 4;
			$config['first_link'] = 'Awal';
	        $config['last_link'] = 'Akhir';
	        $config['next_link'] = 'Selanjutnya';
	        $config['prev_link'] = 'Sebelumnya';
	        $config['full_tag_open'] = '<ul class="pagination">';
	        $config['full_tag_close'] = '</ul>';

	        $config['first_link'] = 'Awal';
	        $config['first_tag_open'] = '<li class="prev page">';
	        $config['first_tag_close'] = '</li>';

	        $config['last_link'] = 'Akhir';
	        $config['last_tag_open'] = '<li class="next page">';
	        $config['last_tag_close'] = '</li>';

	        $config['next_link'] = 'Selanjutnya';
	        $config['next_tag_open'] = '<li class="next page">';
	        $config['next_tag_close'] = '</li>';

	        $config['prev_link'] = 'Sebelumnya';
	        $config['prev_tag_open'] = '<li class="prev page">';
	        $config['prev_tag_close'] = '</li>';

	        $config['cur_tag_open'] = '<li class="active"><a href="">';
	        $config['cur_tag_close'] = '</a></li>';

	        $config['num_tag_open'] = '<li class="page">';
	        $config['num_tag_close'] = '</li>';

			$this->pagination->initialize($config);
			$data["paginator"] =$this->pagination->create_links();
			
			$data['produk_brand'] = $this->db->query("select a.*,b.* from tbl_produk a join tbl_brand b on a.brand_id=b.id_brand where a.brand_id='$id_brand' order by a.id_produk desc 
			LIMIT ".$offset.",".$limit."");

		$this->load->view('home/brand',$data);
	}

	public function cari () {
		$cari = $this->input->post('cari');

		if ($cari=="") {

		}
		else {

			$data['kontak'] 		= $this->home_model->GetKontak();
			$data['sosial_media'] 	= $this->home_model->GetSosialMedia();
			$data['brand'] 			= $this->home_model->GetBrand(); 
			$data['kategori'] 		= $this->home_model->GetKategori(); 
			$data['produk_cari']	= $this->home_model->GetProdukCari($cari);

			$this->load->view('home/cari',$data);
		}
	}

	public function produk () {
		$id_produk = $this->uri->segment(3);

		$data['kontak'] 		= $this->home_model->GetKontak();
		$data['sosial_media'] 	= $this->home_model->GetSosialMedia();
		$data['brand'] 			= $this->home_model->GetBrand(); 
		$data['kategori'] 		= $this->home_model->GetKategori(); 
		$data['random']			= $this->home_model->GetRandomProduk();
		$data['random_active']	= $this->home_model->GetRandomActiveProduk();

		$data['data_produk']= $this->home_model->GetProdukId($id_produk);

		$this->load->view('home/produk',$data);
	}
}