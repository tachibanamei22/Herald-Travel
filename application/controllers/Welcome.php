<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function form()
	{
		$this->load->view("form");

	}

	function add(){
		$data= array(
			"username"=>$this->input->post("nama"),
			"password"=>$this->input->post("pass"),
			"level"=>$this->input->post("level"),
			"fullname"=>$this->input->post("fullname")
		);

		$insert = $this->db->insert('user',$data);

		if($insert)
		{
			echo "Data Berhasil Di Input";
		}else
		{
			echo "Data Gagal di Input";
		}
	}
}
