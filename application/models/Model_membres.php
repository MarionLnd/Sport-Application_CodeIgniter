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

	// Obtention de l'id du membre
	public function get_id_membre($login){

		$this->db->select('id')->from('Utilisateur')->where('Login', $login);

		$query = $this->db->get();

		if($query->num_rows() == 1){

			$rq = $query->row();

			$id = $rq->id;

			return $id;

		} else {

			echo "PROBLEME";

		}

	}

	// Obtention de l'id de l'admin
	public function get_id_admin($login){

		$this->db->select('idLoginAdmin')->from('Login_Admin')->where('LoginAdmin', $login);

		$query = $this->db->get();

		if($query->num_rows() == 1){

			$rq = $query->row();

			$id = $rq->idLoginAdmin;

			return $id;
		}

	}

	public function modifier_membre($id, $data){

		$this->db->where('id', $id);

		return $this->db->update('Utilisateur', $data);

	}

	// Vérifie si l'user est un membre où non (cad s'il fait partie de la table Login_Membre car un membre est un user qui fait partie d'au moins 1 équipe)
	public function verification_membre($id){

		$this->db->select('LoginMembre')->from('Login_Membre')->where('idLoginMembre', $id);

		$query = $this->db->get();

		if($query->num_rows() == 1){

			$rq = $query->row();

			$id = $rq->id;

			return true;

		} else {

			return false;

		}
	}

	public function creer_login_membre($id, $login){

			//$this->db->insert('Login_Membre', $login);

			$data = array(
				'idLoginMembre' => $id,
				'LoginMembre' => $login
			);

			return $this->db->insert('Login_Membre', $data);
	}

	public function creer_login_admin($id, $login){

			//$this->db->insert('Login_Membre', $login);

			$data = array(
				'idLoginAdmin' => $id,
				'LoginAdmin' => $login
			);

			return $this->db->insert('Login_Admin', $data);
	}

	// Un membre fait partie d'une équipe
	public function creer_membre($id, $nomEquipe){

			//$this->db->insert('Login_Membre', $login);

			$data = array(
				'idMembre' => $id,
				'nomEquipe' => $nomEquipe
			);

			return $this->db->insert('Membre', $data);
	}

	// Un membre a créée une équipe
	public function creer_admin($id, $nomEquipe){

			//$this->db->insert('Login_Admin', $login);

			$data = array(
				'member_id' => $id,
				'team_login' => $nomEquipe
			);

			return $this->db->insert('Admin', $data);
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

	// Obtention du nombre d'équipe(s) de l'utilisateur
	public function get_nb_equipes($id){

		$this->db->select('nomEquipe')->from('Membre')->where('idMembre', $id);

		$result = $this->db->count_all_results();

		return $result;
	}

	public function get_equipes_admin($id){

		$this->db->select('NomEquipe')->from('Admin')->where('idAdmin', $id);

		$query = $this->db->get();

		return $query->result();

	}


	public function get_membres(){

		$this->db->select('Login')->from('Utilisateur');

		$query = $this->db->get();

		if($query->num_rows() >= 1){

				return $query->result();

		} else {

			echo 'Pas de membres';

			//return $query->result();

		}

	}

}
