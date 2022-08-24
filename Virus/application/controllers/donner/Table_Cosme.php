<?php defined('BASEPATH') or exit('No direct script access allowed');

class Table_Cosme extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		// $this->load->helper(array('url', 'form'));

		$this->load->Model('ModelArticle/Cosmeherits');

		$this->load->library('form_validation');
		$this->load->helper(array('url', 'form'));

		$this->data['header'] = $this->load->view('Dossier/Tete/Header', '', true);

		// $this->load->library(array('form_validation', ''));

	}

	public function Tinda()
	{
		$this->form_validation->set_rules('search', '', 'required', array('required' => 'Veuillez-Saisir un Mot de Recherche !'));

		if ($this->form_validation->run()) {
			$Nom_Article = $this->input->post("search");

			$res = $this->Cosmeherits->Rechercher($Nom_Article);
		} else {
			$res = [];
		}
		$this->data['titre'] = "";
		// $idcosme = $this->input->get('idcosme');
		// $this->data['cosmetique'] = $this->Cosmeherits->Selection();
		// $this->data['cosmetique'] = $this->Cosmeherits->idselection();
		$idpharma = $this->input->get('idart');

		$this->data['idpharma'] = $this->Cosmeherits->idselection('idpharma');

		$this->db->select('PdPharmacie.*,coalesce(sum(vente.qte), 0) qte_v');
		$this->db->group_by('PdPharmacie.idpharma');
		$this->db->order_by('PdPharmacie.idpharma', 'desc');
		$this->db->join('vente', 'vente.idpharma=PdPharmacie.idpharma', 'left');
		$this->data['cosmetique'] = $this->db->get('PdPharmacie')->result();

		$this->data['recherche'] = $res;

		$this->load->view('Dossier/tables_donner', $this->data);
	}

	public function Tindas()
	{
		$this->form_validation->set_rules('search', '', 'required', array('required' => 'Veuillez-Saisir un Mot de Recherche !'));

		if ($this->form_validation->run()) {
			$Nom_Article = $this->input->post("search");

			$res = $this->Cosmeherits->Rechercher($Nom_Article);
		} else {
			$res = [];
		}
		$this->data['titre'] = "";
		// $idcosme = $this->input->get('idcosme');
		// $this->data['cosmetique'] = $this->Cosmeherits->Selection();
		// $this->data['cosmetique'] = $this->Cosmeherits->idselection();
		$idpharma = $this->input->get('idart');

		$this->data['idpharma'] = $this->Cosmeherits->idselection('idpharma');
		// $this->data['cosmetique'] = $this->Cosmeherits->selection();
		$this->db->select('PdPharmacie.*,coalesce(sum(vente.qte), 0) qte_v');
		$this->db->group_by('PdPharmacie.idpharma');
		$this->db->order_by('PdPharmacie.idpharma', 'desc');
		$this->db->join('vente', 'vente.idpharma=PdPharmacie.idpharma', 'left');
		$this->data['cosmetique'] = $this->db->get('PdPharmacie')->result();
		$this->data['recherche'] = $res;

		$this->load->view('Dossier/tables_donners', $this->data);
	}


	public function Modifier()
	{
		$idpharma = $this->input->get('idpharma');
		$this->data['article'] = $this->Cosmeherits->idselection($idpharma);
		// $this->data['article'] = $this->Cosmeherits->Selection();
		// $this->load->view();
		$this->load->view('Dossier/form_validation_mod', $this->data);

		// 
	}
	///////////////////////////Modification Super Admin //////////////////////

	public function Modifiers()
	{
		$idpharma = $this->input->get('idpharma');
		$this->data['article'] = $this->Cosmeherits->idselection($idpharma);
		// $this->data['article'] = $this->Cosmeherits->Selection();
		// $this->load->view();
		$this->load->view('Dossier/form_validation_mods', $this->data);

		// 
	}
	////////////////////////////////////////////////////////////
	public function Supprimer()
	{
		$idpharma = $this->input->get('idpharma');
		$data = $this->Cosmeherits->idselection($idpharma);
		$this->Cosmeherits->Supprimer($idpharma);

		redirect(site_url("donner/Table_Cosme/Tindas"));
	}

	function ventes()
	{
		$this->db->select('PdPharmacie.*,coalesce(sum(vente.qte), 0) qte_v,date, idvente');
		// $this->db->select('PdPharmacie.*,coalesce(sum(vente.prix), 0) qte_v,date, idvente');
		$this->db->group_by('vente.idvente');
		$this->db->join('vente', 'vente.idpharma=PdPharmacie.idpharma');
		$this->db->order_by('vente.idvente', 'desc');
		$res['vente'] = $this->db->get('PdPharmacie')->result();

		$this->db->select('coalesce(sum(vente.qte * prix), 0) total');
		
		// $this->db->select('coalesce(sum(vente.prix / qte), 0) prix');
		$this->db->where(['date(date) >=' => date('Y-m-d'), 'date(date) <=' => date('Y-m-d')]);
		$tot = $this->db->get('vente')->result();
		$tot = end($tot);
		$res['vente_jour'] = $tot->total . " FC";

		$res['header'] = $this->data['header'];
		$this->load->view('Dossier/ventes', $res);
	}
}
