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
	public function __construct()
    {
        parent::__construct();
       
  //       if(!$this->session->has_userdata('mail'))
		// {
		// 	redirect('welcome/index');  
		// }
		$this->load->library('session');
    }
	public function index()
	{
		$data['title']='Takalo - Se Connecter';
		$data['content']='page/login';
		$this->load->view('page/template2',$data);
	}		
	
	public function login()
	{
		$mail = $this->input->post("mail");
		$pwd = $this->input->post("pwd");
		$this->load->model('Model');
		$user = $this->Model->checkLogin($mail,$pwd);
		if (empty($mail || empty($pwd))) {
			redirect('welcome/index');
		}
		if($user == 1)
		{	
			$id = $this->Model->getUserId($mail,$pwd);
			$this->session->set_userdata('idUtilisateur',$id);
			$data['title']='Takalo - Accueil';
			$data['content']='page/accueil';
			$data['id'] = $this->session->userdata('idUtilisateur');
			$this->load->view('page/template',$data);
		}
		else{
		 	redirect('welcome/index');
		}
	}

	public function accueil()
	{
		$data['title']='Takalo - Accueil';
		$data['content']='page/accueil';
		$this->load->view('page/template',$data);
	}

	public function inscription()
	{
		$data['title']='Takalo - Inscription';
		$data['content']='page/inscription';
		$this->load->view('page/template2',$data);
	}

	public function sendInscription()
	{
		$this->load->model('Model');
		$arrData['nom'] = $this->input->post('nom');
		$arrData['mail'] = $this->input->post('mail');
		$arrData['pwd'] = $this->input->post('pwd');
		$insert = $this->Model->inscription($arrData['nom'],$arrData['mail'],$arrData['pwd']); 
		redirect('welcome/index');
	}

	public function deconexion()
	{
		$this->session->sess_destroy();
		redirect('welcome/index');
	}
}
?>
