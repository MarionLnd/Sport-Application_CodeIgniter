<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_membres extends CI_Model{

	public function __construct(){

		parent::__construct();
		$this->load->database();

	}

	// Inscription
	public function creer_user($data){

		return $this->db->insert('Utilisateur', $data);

	}

	public function creer_admin($data){

		return $this->db->insert('Admin', $data);
	}

	public function supprimer_compte($login){

		return $this->db->where('login', $login)->delete('Utilisateur');

	}

	// Fonction vérifiant que le login et le mot de passe correspondent
	public function verification_login_pwd($login, $password){

		// Requête pour la selection des login de la base de données
		$this->db->select('*')->from('Utilisateur')->where('Login', $login);

		$query = $this->db->get();

		// Si le login entré est dans la base de données
		if($query->num_rows() == 1){

			$this->db->select('*');
			$this->db->from('Utilisateur');
			$this->db->where('Login', $login);
			$this->db->where('Password', $password);

			$query = $this->db->get();

			// Si le mot de passe entré correspond à celui de la base de données
			if($query->num_rows() == 1){

				$rq = $query->row();

				$pwd = $rq->Password;

				return $pwd;

			// Sinon, si le mot de passe n'est pas bon
			} else {

				return -2;

			}

		// Sinon, si le login n'est pas bon
		} else {

			return -3;

		}

	}

	// Obtention de l'id de l'utilisateur
	public function getId($login){

		$this->db->select('id')->from('Utilisateur')->where('Login', $login);

		$query = $this->db->get();

		if($query->num_rows() == 1){

			$rq = $query->row();

			$id = $rq->id;

			return $id;
		}

	}

	public function modifier_membre($id, $data){

		$this->db->where('id', $id);

		return $this->db->update('Utilisateur', $data);

	}

	// Un membre fait partie d'une équipe
	public function creer_membre($data){

		return $this->db->insert('Membre', $data);

	}

	public function get_info_membre($login){

		$this->db->select('*')->from('Utilisateur')->where('Login', $login);

		$query = $this->db->get();

		if($query->num_rows() == 1){

			$row = $query->row();

			$data['Login'] = $row->Login;
			$data['Nom'] = $row->Nom;
			$data['Prenom'] = $row->Prenom;
			$data['Password'] = $row->Password;
			$data['Mail'] = $row->Mail;
			$data['Avatar'] = $row->Avatar;

			return $data;

		} else {

			echo "JE FONCTIONNE PAS";
		}
	}

	public function get_statut($login){

		$this->db->select('*')->from('Membre')->where('Login', $login);

		$query = $this->db->get();

		if($query->num_rows() == 1){

			$row = $query->row();

			$data['nomEquipe'] = $row->nomEquipe;
			$data['admin'] = $row->isAdmin;
			$data['entraineur'] = $row->isEntraineur;

			return $data;

		} else {

			echo "JE FONCTIONNE PAS";
		}
	}


	// Obtention du nombre d'invitations de l'utilisateur
	public function get_invitations($login){

		//$rq = "SELECT COUNT(*) FROM Invitations WHERE LoginMembreInvite = ?";

		$this->db->select("*")->from('Invitations')->where('LoginMembreInvite', $login);

		$query = $this->db->get();

		$rq = $query->row();

		//$data['NomEquipe'] = $rq->NomEquipe;

		//$data['LoginAdmin'] = $rq->LoginAdmin;

		//return $data;

	}

	// Obtention du nom des équipes de l'utilisateur
	public function get_equipes($login){

		$this->db->select('NomEquipe, count(*)')->from('Equipe')->where('LoginMembre', $login);

		$query = $this->db->get();

		$rq = $query->result();

		return $rq;

	}

	public function get_equipes_admin($login){

		$this->db->select('NomEquipe')->from('Equipe')->where('LoginAdmin', $login);

		$query = $this->db->get();

		return $query->result();

	}


	public function get_membres(){

		$this->db->select('Login')->from('Membre');

		$query = $this->db->get();

		return $query->result();

	}

}
