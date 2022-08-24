<?php defined('BASEPATH') OR exit('No direct script access allowed ');

class Cosmeherits extends CI_Model
{
    public function Sauvegarder($m)
    {
        $this->db->insert('PdPharmacie', $m);
    }

    public function Modifier($data)
    {
        $this->db->set('Nom_Article', $data['Nom_Article']);
        $this->db->set('Code_Article', $data['Code_Article']);
        $this->db->set('Prix_F', $data['Prix_F']);
        $this->db->set('stock', $data['Qte_T']);
        // $this->db->set('Qte_V', $data['Qte_V']);
        // $this->db->set('Qte_R', $data['Qte_R']);
        $this->db->set('Date_F', $data['Date_F']);
        $this->db->set('Date_P', $data['Date_P']);

        $this->db->where('idpharma', $data['idpharma']);
        return $this->db->update("PdPharmacie", $data);

    }
    public function Supprimer($idpharma)
    {
        $this->db->where('idpharma', $idpharma);
        $this->db->delete('PdPharmacie');
    }

    public function idselection($idpharma)
    {
        $this->db->where('idpharma', $idpharma);
        return $this->db->get('PdPharmacie')->result();
    }
    public function Selection()
    {
        $query = $this->db->query("select * from PdPharmacie");

        return $query->result();
    }

    public function Rechercher($search = NULL)
    {
        return ($search == NULL) ? $this->db->get('PdPharmacie')->result() : $this->db->get_where('PdPharmacie', "Nom_article LIKE '%$search%'")->result();
        
    }
}
