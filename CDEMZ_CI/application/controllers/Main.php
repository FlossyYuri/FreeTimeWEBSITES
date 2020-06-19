<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

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
		$dados['titulo'] = 'Home';
		$this->load->view('base/head', $dados);
		$this->load->view('base/header');
		$this->load->view('telas/home');
		$this->load->view('base/footer');
	}
	public function download()
	{
		$dados['titulo'] = 'Home';
		$this->load->view('base/head', $dados);
		$this->load->view('base/header');
		$this->load->view('telas/home');
		$this->load->view('base/footer');
		redirect('https://play.google.com/store/apps/details?id=mz.co.chillstudio.codigo_de_estrada_mz');
	}
	public function contactos()
	{
		$dados['titulo'] = 'Contacte-nos';
		$this->load->view('base/head', $dados);
		$this->load->view('base/header');
		$this->load->view('telas/contactos');
		$this->load->view('base/footer');
	}
	public function cupons()
	{
		$dados['titulo'] = 'Cupons';
		$this->load->view('base/head', $dados);
		$this->load->view('base/header');
		$this->load->view('telas/cupons');
		$this->load->view('base/footer');
	}
	public function termos()
	{
		$dados['titulo'] = 'Termos e Políticas';
		$this->load->view('base/head', $dados);
		$this->load->view('base/header');
		$this->load->view('telas/termos');
		$this->load->view('base/footer');
	}
}
