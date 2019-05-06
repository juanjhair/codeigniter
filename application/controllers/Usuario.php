<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("UsuarioModel");
	}
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
		echo phpinfo();
	}
	public function saveUser(){
		if($this->input->post()){
			$name=$_POST['name'];
			$surname=$_POST['surname'];
			
			if($this->UsuarioModel->setUser($name,$surname)){
				print_r("verdader");
			}
		}
	}
	public function user(){
		$this->load->model("UsuarioModel");
		$user=$this->UsuarioModel->getUser();
		$this->layout->view('Usuario',compact("user"));
	}
    
}
