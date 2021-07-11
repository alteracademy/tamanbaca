<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {


	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->db->limit(3);
		$this->db->order_by('id','desc');
		$data['cerita_baru'] = $this->db->get('cerita');

		$this->db->order_by('cerita.id','desc');
		$this->db->select('*, pengguna.nama as nama_pengarang');
		$this->db->join('pengguna','pengguna.id = cerita.karangan','LEFT');
		$this->db->where('kategori',1);
		$data['dongeng'] = $this->db->get('cerita');

		$this->db->order_by('cerita.id','desc');
		$this->db->select('*, pengguna.nama as nama_pengarang');
		$this->db->join('pengguna','pengguna.id = cerita.karangan','LEFT');
		$this->db->where('kategori',2);
		$data['cerpen'] = $this->db->get('cerita');

		$this->db->order_by('cerita.id','desc');
		$this->db->select('*, pengguna.nama as nama_pengarang');
		$this->db->join('pengguna','pengguna.id = cerita.karangan','LEFT');
		$this->db->where('kategori',3);
		$data['puisi'] = $this->db->get('cerita');

		$this->db->order_by('id','desc');
		$data['slider'] = $this->db->get('slider');

		$this->db->order_by('id','desc');
		$data['acara'] = $this->db->get('acara');
		$this->load->view('user/v_home',$data);
	}

	public function detail_acara($id)
	{	
		$this->db->limit(3);
		$this->db->order_by('id','desc');
		$data['cerita_baru'] = $this->db->get('cerita');

		$this->db->limit(3);
		$this->db->order_by('id','desc');
		$data['acara_baru'] = $this->db->get('acara');

		$this->db->where('id',$id);
		$data['detail'] = $this->db->get('acara')->row();
		$this->load->view('user/v_detail',$data);
	}

	public function detail_cerita($id)
	{	
		$this->db->limit(3);
		$this->db->order_by('id','desc');
		$data['cerita_baru'] = $this->db->get('cerita');

		$this->db->limit(3);
		$this->db->order_by('id','desc');
		$data['acara_baru'] = $this->db->get('acara');

		$this->db->where('id',$id);
		$data['detail'] = $this->db->get('cerita')->row();
		$this->load->view('user/v_detail',$data);
	}

	public function dongeng()
	{	
		$this->db->limit(5);
		$this->db->order_by('id','desc');
		$this->db->where('kategori',1);
		$data['cerita_baru'] = $this->db->get('cerita');

		$this->db->order_by('id','desc');
		$this->db->where('kategori',1);
		$data['cerita'] = $this->db->get('cerita');

		$this->load->view('user/v_dongeng',$data);
	}

	public function cerpen()
	{	
		$this->db->limit(5);
		$this->db->order_by('id','desc');
		$this->db->where('kategori',2);
		$data['cerita_baru'] = $this->db->get('cerita');

		$this->db->order_by('id','desc');
		$this->db->where('kategori',2);
		$data['cerita'] = $this->db->get('cerita');

		$this->load->view('user/v_cerpen',$data);
	}

	public function puisi()
	{	
		$this->db->limit(5);
		$this->db->order_by('id','desc');
		$this->db->where('kategori',3);
		$data['cerita_baru'] = $this->db->get('cerita');

		$this->db->order_by('id','desc');
		$this->db->where('kategori',3);
		$data['cerita'] = $this->db->get('cerita');

		$this->load->view('user/v_puisi',$data);
	}

	public function acara ()
	{
		$this->db->order_by('id','desc');
		$data['acara'] = $this->db->get('acara');

		$this->load->view("user/v_acara",$data);
		
	}
	
	public function kontak ()
	{
		$this->load->view("user/v_kontak");
	}
	
	public function registrasi()
	{	$data['city']=$this->db->get('kota');
		$this->load->view('user/registrasi',$data);
	}

	public function saran()
	{
		$data = array(
				'nama'  	=> $this->input->post('nama'),
				'email' 	=> $this->input->post('email'),
				'isi' 		=> $this->input->post('isi')	
				);
		$this->db->insert('saran_pengguna',$data);
		redirect(base_url('index/input_saran_sukses'));
	}

	public function saveregistrasi()
	{
		$data = array(
				'nama'  	=> $this->input->post('nama'),
				'email' 	=> $this->input->post('email'),
				'password' 	=> $this->input->post('password'),
				'no_telpon' => $this->input->post('no_telpon'),
				'id_kota'   => $this->input->post('id_kota'),
				'alamat'   => $this->input->post('alamat')	
				);
		$this->db->insert('pembeli',$data);
		redirect(base_url('login'));
	}

	public function input_saran_sukses()
	{	
		$this->load->view('user/v_input_saran_sukses');
	}
	
		
}