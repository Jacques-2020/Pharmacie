<?php defined('BASEPATH') or exit('No direct script access allowed');

class Ajax extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	function vente()
	{
		$qte = (int) $this->input->post('qte');
		
		$idpharma = (int) $this->input->post('idpharma');
		$rep['success'] = false;

		if (!$qte or !$idpharma) {
			$rep['message'] = "Champs vides";
			echo json_encode($rep);
			exit;
		}

		if ($qte <= 0) {
			$rep['message'] = "Qte non valide";
			echo json_encode($rep);
			exit;
		}

		if (!count($art = $this->db->where('idpharma', $idpharma)->get('PdPharmacie')->result())) {
			$rep['message'] = "Produit non valide";
			echo json_encode($rep);
			exit;
		}
		$art = end($art);
		if ($qte > $art->stock) {
			$rep['message'] = "Le stock disponible pour ce produit est de $art->stock";
			echo json_encode($rep);
			exit;
		}

		$this->db->trans_start();
		$this->db->where('idpharma', $idpharma)->update('PdPharmacie', ['stock' => (int) $art->stock - $qte]);
		$this->db->insert('vente', ['idpharma' => $idpharma, 'qte' => $qte, 'prix' => $art->Prix_F]);
		$this->db->trans_complete();
		// $rep['message'] = "Prix Unitaire Vendu : $art->Prix_F / $qte FC = " . $art->Prix_F / $qte . "FC";
		$rep['message'] = "Vente enregistrée avec succès : $qte x $art->Prix_F FC = " . $qte * $art->Prix_F . " FC";
		$rep['success'] = true;

		echo json_encode($rep);
	}
}
