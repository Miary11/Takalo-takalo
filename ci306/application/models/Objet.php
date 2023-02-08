<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objet extends CI_Controller {

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
		$this->load->model('Model');
    }

	public function détails()
	{
		$i = $this->get("i");
		$data['title'] = 'Takalo - Détails';
		$data['détailsObjet'] = $this->Model->objetDétails($i);
        $data['content'] = 'page/détailObjet';
		$this->load->view('page/template',$data);
	}

}?>