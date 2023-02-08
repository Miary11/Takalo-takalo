<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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

	public function mesObjets()
	{
		$id = $this->input->post("id");
		$data['title'] = 'Takalo - Mes objets';
		$data['listeObjet'] = $this->Model->malisteObjets($id);
        $data['content'] = 'page/mesObjets';
		$this->load->view('page/template',$data);
	}
	public function leursObjets()
	{
		$data['title'] = 'Takalo - Autres objets';
		$id = $this->input->post("id");
		$data['listeObjet'] = $this->Model->leurlisteObjets($id);
        $data['content'] = 'page/leursObjets';
		$this->load->view('page/template',$data);
	}

	public function detail($id = '')
	{
		$data['title'] = 'Takalo - Détails';
		$data['detailsObjet'] = $this->Model->objetDetail($id);
        $data['content'] = 'page/detailObjet';
		$this->load->view('page/template',$data);
	}
	public function detailAutre($id = '')
	{
		$data['title'] = 'Takalo - Détails';
		$data['detailsObjet'] = $this->Model->objetDetail($id);
        $data['content'] = 'page/detailAutreObjet';
		$this->load->view('page/template',$data);
	}

}?>