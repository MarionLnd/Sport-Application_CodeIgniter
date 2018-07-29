<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_equipe extends CI_Model{

	public function __construct(){

		parent::__construct();
		$this->load->database();
	}

	public function creer_equipe($data){

		return $this->db->insert('Equipe', $data);

	}

	public function supprimer_equipe($nomEquipe){

		return $this->db->where('NomEquipe', $nomEquipe)->delete('Equipe');

	}

	public function supprimer_membre($login, $nomEquipe){

		$rq = "";

	}

	public function get_info_equipe($nomEquipe){

		$this->db->select('*')->from('Equipe')->where('NomEquipe', $nomEquipe);

		$query = $this->db->get();

		if($query->num_rows() == 1){

			$row = $query->row();

			$data['Logo'] = $row->Logo;
			$data['Sport'] = $row->Sport;
			$data['Ville'] = $row->Ville;
			$data['Mixite'] = $row->Mixite;
			$data['Description'] = $row->Description;
			$data['LoginAdmin'] = $row->LoginEquipeAdmin;

			return $data;

		} else {

			echo "JE FONCTIONNE PAS";
		}
	}

	public function get_sport($nomEquipe){

		$this->db->select('Sport')->from('Equipe')->where('NomEquipe', $nomEquipe); //$nomEquipe[0]['NomEquipe']

		$query = $this->db->get();

		$rq = $query->row();

		//$rq = $query->result();

		return $rq;

	}

	public function get_equipe($id){

		$this->db->select('nomEquipe')->from('Membre')->where('idMembre', $id);

		$query = $this->db->get();

		$rq = $query->result();

		foreach ($rq as $row){

    	return $row->nomEquipe;

		}

	}

	public function verification_pwd($nomEquipe, $pwdEquipe){

		// Requête pour la selection des nom des équipes de la base de données
		$this->db->select('*')->from('Equipe')->where('NomEquipe', $nomEquipe);

		$query = $this->db->get();

		// Si le nom de l'équipe entré est dans la base de données
		if($query->num_rows() >= 1){

			$this->db->select('MdpInscrit','NomEquipe')->from('Equipe')->where('NomEquipe', $nomEquipe);

			$query = $this->db->get();

			// Si le mot de passe entré correspond à celui de la base de données
			if($query->num_rows() == 1){

				$rq = $query->row();
				$pwd = $rq->MdpInscrit;

				return $pwd;

			// Sinon, si le mot de passe n'est pas bon
			} else {

				return -2;

			}

		// Sinon, si le nom de l'équipe n'est pas bon
		} else {

			return -3;

		}
	}

	public function integrer_equipe($id, $loginM, $nomEquipe){

		$this->db->select('*')->from('Equipe')->where('NomEquipe', $nomEquipe);

		$query = $this->db->get();

		// Si le mot de passe entré correspond à celui de la base de données
		if($query->num_rows() == 1){

			$data = array(
				'idMembre' => $id,
				'nomEquipe' => $nomEquipe
			);

			return $this->db->insert('Membre', $data);

		// Sinon, si l'insertion ne s'est pas effectuée
		} else {

			echo "Mauvaise insertion";

			return -2;

		}

	}

	/*public function creer_admin($data){

		return $this->db->insert('Admin', $data);

	}*/


	// Obtention du login de l'admin
	public function get_admin($nomEquipe){

		$this->db->select('idAdmin')->from('Admin')->where('NomEquipe', $nomEquipe);

		$query = $this->db->get();

		if($query->num_rows() >= 1){

			$this->db->select('idAdmin')->from('Admin')->where('NomEquipe', $nomEquipe);

			$query = $this->db->get();

			return $query->result();

		} else {

			return $query->result();

		}

	}

	// Obtention du login de l'entraineur
	public function isEntraineur($id){

		$this->db->select('NomEquipeEntraineur')->from('Entraineur')->where('idEntraineur', $id);

		$query = $this->db->get();

		if($query->num_rows() == 1){

			return 1;

		} else {

			return 0;

		}

	}

	public function isAdmin($id){

		$this->db->select('NomEquipe')->from('Admin')->where('idAdmin', $id);

		$query = $this->db->get();

		if($query->num_rows() == 1){

			return 1;

		} else {

			return 0;

		}

	}

	public function get_liste_membres($nomEquipe){

		$this->db->select('idMembre')->from('Membre')->where('nomEquipe', $nomEquipe);

		$query = $this->db->get();

		if($query->num_rows() >= 1){

			$this->db->select('*')->from('Login_Membre')->join('Utilisateur', 'Utilisateur.id = Login_Membre.idLoginMembre');

			$query = $this->db->get();

			return $query->result();

		}

		return $query->result();

	}

	public function ajouter_membre($loginAI, $nomEquipe){



		/*INSERT INTO Invitations(LoginMembreInvite, LoginAdmin, nomEquipe) VALUES('LoginMI','LoginAdmin','NomEquipe');
			IF(QUERY == 1){
				INSERT INTO Membre (Login, nomEquipe) VALUES ('LoginMI', 'nomEquipe');
					/!\ FAIRE UN TRIGGER QUI AJOUTE LE LOGIN DU MEMBRE AJOUTE DANS LA TABLE EQUIPE
						ET UN AUTRE POUR GERER LA SUPPRESSION DES MEMBRES OU EQUIPES /!\
		*/

	}

	public function designer_entraineur($login){

	}

}
