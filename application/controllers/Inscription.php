<?php

class Inscription extends CI_Controller{

	public function __construct(){

		parent::__construct(); /*OBLIGATOIRE : EQUIVALEUR SUPER() EN JAVA*/
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Model_membres');

	}

	public function index(){

		$this->validation_inscription();
	}

	public function validation_inscription(){

		$this->form_validation->set_rules('nom', '', 'required|trim|min_length[3]|max_length[50]');

		$this->form_validation->set_rules('prenom', '', 'required|trim|min_length[3]|max_length[50]');

		$this->form_validation->set_rules('mail', '', 'valid_email|is_unique[Utilisateur.Mail]|trim|min_length[3]|max_length[50]');

		$this->form_validation->set_rules('login', '', 'required|trim|is_unique[Utilisateur.Login]|min_length[3]|max_length[50]');

		$this->form_validation->set_rules('password', '', 'required|trim|min_length[3]|max_length[50]');

		$this->form_validation->set_rules('avatar', '', 'trim|xss_clean');


		$this->form_validation->set_message('is_unique', 'Le {field} existe déjà.');


		$config['upload_path'] = './assets/Images/avatar';

		$config['allowed_types'] = 'gif|jpg|png|svg|jpeg|ico';

		$config['max_size'] = 0;

		$config['max_width'] = 0;

		$config['max_height'] = 0;

		$config['min_width'] = 0;

		$config['min_height'] = 0;

		$config['remove_spaces'] = TRUE;


		$this->load->library('upload');

		$this->upload->initialize($config);



		if($this->form_validation->run() === FALSE){

			$this->load->view('templates/header');

			$this->load->view('user/user_inscription');

		} else {

			$nom = $this->input->post('nom');

			$prenom = $this->input->post('prenom');

			$mail = $this->input->post('mail');

			$login = $this->input->post('login');

			$password = $this->input->post('password');

			$password = sha1($password);

			$avatar = $this->input->post('avatar');

			if($avatar === null){

				$data = array(
					'nom' => $nom,
					'prenom' => $prenom,
					'mail' => $mail,
					'login' => $login,
					'password' => $password,
					'avatar' => $avatar
				);

				if($this->Model_membres->creer_user($data)){

					$this->load->view('templates/header');

					$this->load->view('user/user_connexion');

				} else {

					$data = array(
						'nom' => $nom,
						'prenom' => $prenom,
						'mail' => $mail,
						'login' => $login,
						'password' => $password,
						'avatar' => $avatar
					);

					$data['avatar']=$_FILES['avatar']['name'];

					if($this->Model_membres->creer_user($data)){

						$this->load->view('templates/header');

						$this->load->view('user/user_connexion');

					} else {

						$this->load->view('templates/header');

						$this->load->view('user/user_inscription');
					}
				}
			}
		}
	}
}

?>
