<?php defined('BASEPATH')OR exit('No direct script access allowed');

    class Admins extends CI_Model
    {
        public function Sauvegarder($mt)
        {
            $this->db->insert("Administrateur", $mt);
        }

        public function Modifier($data)
        {
            $this->db->set('NomAdmin', $data['NomAdmin']);
            $this->db->set('EmailAdmin', $data['EmalAdmin']);
            $this->db->set('MotdepasseAdmin', $data['MotdepasseAdmin']);
            $this->db->set('Etatcompte', $data['Etatcompte']);

            $this->db->where('idadmin', $data['idadmin']);
            return $this->db->update("Administrateur", $data);
        }
        public function idselection($idadmin)
        {
            $this->db->where("idadmin", $idadmin);
            return $this->db->get("Administrateur")->result();
        }

        public function Supprimer($idadmin)
        {
            $this->db->where("idadmin", $idadmin);
            $this->db->delete("Administrateur");
        }

        public function Selection()
        {
            return $this->db->query("Select * from Administrateur")->result();
        }
    }