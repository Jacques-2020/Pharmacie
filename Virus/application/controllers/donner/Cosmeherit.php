<?php defined('BASEPATH') or exit('No direct script access allowed');

class Cosmeherit extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('url', 'form'));

		$this->load->Model('ModelArticle/Cosmeherits');


		$this->load->library('form_validation');

		$this->data['header'] = $this->load->view('Dossier/Tete/Header', '', true);
	}

	public function Tyango()
	{
		if ($this->input->server("REQUEST_METHOD") == "POST") {
			$this->form_validation->set_rules('nom', '', 'required');
			$this->form_validation->set_rules('code', '', 'required');
			$this->form_validation->set_rules('prixf', '', 'required');
			$this->form_validation->set_rules('qte', '', 'required');
			// $this->form_validation->set_rules('qtev', '', 'required');
			// $this->form_validation->set_rules('qter', '', 'required');
			$this->form_validation->set_rules('datef', '', 'required');
			$this->form_validation->set_rules('date', '', 'required');

			if ($this->form_validation->run()) {
				$Nom_Article  = $this->input->post('nom');
				$Code_Article = $this->input->post('code');
				$Prix_F = (float) $this->input->post('prixf');
				$Qte_T = $this->input->post('qte');
				// $a = $Qte_T;
				// $Qte_V  = $this->input->post('qtev');
				// $Qte_R = (int) $this->input->post('qter');
				// $Qte_R = $a;
				$Date_F   = $this->input->post('datef');
				$Date_P   = $this->input->post('date');

				$data = array(
					'Nom_Article' => $Nom_Article,
					'Code_Article' => $Code_Article,
					'Prix_F' => $Prix_F,
					// 'Qte_T' => $Qte_T,
					'stock' => $Qte_T,
					// 'Qte_V' => $Qte_V,
					// 'Qte_R' => $Qte_R,
					'Date_F' => $Date_F,
					'Date_P' => $Date_P,
					'DateCreation' => Date('d-M-Y à H:i:s')
				);
				$this->Cosmeherits->Sauvegarder($data);
				$this->session->set_flashdata('message', "Produit ajouté.");
				$this->session->set_flashdata('class', 'text-success');
			} else {
				$m = $this->form_validation->error_array();
				$text = '';
				foreach ($m as $key => $mess) {
					$text .= "$mess<br>";
				}
				$this->session->set_flashdata('message', $text);
				$this->session->set_flashdata('class', 'text-danger');
			}
			redirect(site_url('donner/Cosmeherit/Tyango'));
		}

		$this->form_validation->set_rules('search', '', 'required', array('required' => 'Veuillez-Saisir un Mot de Recherche !'));

		if ($this->form_validation->run()) {
			$Nom_Article = $this->input->post("search");

			$res = $this->Cosmeherits->Rechercher($Nom_Article);
		} else {
			$res = [];
		}
		$this->data['titre'] = "";

		$idpharma = $this->input->get('idart');

		$this->data['idpharma'] = $this->Cosmeherits->idselection('idpharma');
		$this->data['cosmetique'] = $this->Cosmeherits->selection();
		$this->data['recherche'] = $res;

		$this->load->view('Dossier/form_validation', $this->data);
	}

	public function Modifier()
	{
		$idpharma = $this->input->get('idpharma');
		$this->data['article'] = $this->Cosmeherits->idselection($idpharma);
		// $this->data['article'] = $this->Cosmeherits->Selection();
		// $this->load->view();
		$this->load->view('Dossier/form_validation_mod', $this->data);

		if ($this->input->post("modifier")) {
			$idpharma = $this->input->post('idart');
			$Nom_Article = $this->input->post('nommod');
			$Code_Article = $this->input->post('codemod');
			$Prix_F = $this->input->post('modprixf');
			$Qte_T = $this->input->post('modqte');
 

			$Date_F = $this->input->post('moddatef');
			$Date_P = $this->input->post('moddatep');

			$data = array(
				'idpharma' => $idpharma,
				'Nom_Article' => $Nom_Article,
				'Code_Article' => $Code_Article,
				'Prix_F' => $Prix_F,
				'stock' => $Qte_T,
				'Date_F' => $Date_F,
				'Date_P' => $Date_P
			);
			$this->Cosmeherits->Modifier($data);
			redirect(site_url("donner/Table_Cosme/Tinda"));
		}
	}

	////////////////////// Modification Super Admin /////////////////////////////////
	public function Modifiers()
	{
		$idpharma = $this->input->get('idpharma');
		$this->data['article'] = $this->Cosmeherits->idselection($idpharma);
		// $this->data['article'] = $this->Cosmeherits->Selection();
		// $this->load->view();
		$this->load->view('Dossier/form_validation_mods', $this->data);

		if ($this->input->post("modifier")) {
			$idpharma = $this->input->post('idart');
			$Nom_Article = $this->input->post('nommod');
			$Code_Article = $this->input->post('codemod');
			$Prix_F = $this->input->post('modprixf');
			$Qte_T = $this->input->post('modqte');
			// $Qte_V = $this->input->post('qtevmod');
			// $b = $Qte_T - $Qte_V;
			// $Qte_R = $this->input->post('modqter');
			// $Qte_R = $b;
			$Date_F = $this->input->post('moddatef');
			$Date_P = $this->input->post('moddatep');

			$data = array(
				'idpharma' => $idpharma,
				'Nom_Article' => $Nom_Article,
				'Code_Article' => $Code_Article,
				'Prix_F' => $Prix_F,
				// 'Qte_T' => $Qte_T,
				'stock' => $Qte_T,
				// 'Qte_V' => $Qte_V,
				// 'Qte_R' => $Qte_R,
				'Date_F' => $Date_F,
				'Date_P' => $Date_P
			);
			$this->Cosmeherits->Modifier($data);
			redirect(site_url("donner/Table_Cosme/Tindas"));
		}
	}


	public function Supprimer()
	{
		$idpharma = $this->input->get('idpharma');
		$data = $this->Cosmeherits->idselection($idpharma);
		$this->Cosmeherits->Supprimer($idpharma);

		redirect(site_url("donner/Table_Cosme/Tindas"));
	}

	public function tafuta()
	{
		$this->form_validation->set_rules('search', '', 'required', array('required' => 'Veuillez-Saisir un Mot de Recherche !'));

		if ($this->form_validation->run()) {
			$Nom_Article = $this->input->post("search");

			$res = $this->Cosmeherits->Rechercher($Nom_Article);
		} else {
			$res = [];
		}
		$this->data['titre'] = "";

		$idpharma = $this->input->get('idart');

		$this->data['idpharma'] = $this->Cosmeherits->idselection('idpharma');
		$this->data['cosmetique'] = $this->Cosmeherits->selection();
		$this->data['recherche'] = $res;

		$this->load->view('Dossier/form_validation', $this->data);
	}
}
