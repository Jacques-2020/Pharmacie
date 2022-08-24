<?php defined('BASEPATH')OR exit('No direct script access allowed');

    class LaboAdmin extends CI_Controller
    {
        public function __construct()
        {
            parent :: __construct();

            $this->load->Model("ModelAdmin/Admins");

            $this->data['header'] = $this->load->view('Dossier/Tete/Header', '', true);

        }

        public function EspaceAd()
        {
            $this->data['compte'] = $this->Admins->Selection();

            $this->load->view("Dossier/table", $this->data);
        }

        public function EspaceAds()
        {
            $this->data['compte'] = $this->Admins->Selection();

            $this->load->view("Dossier/tables", $this->data);
        }

        public function Supprimer()
        {
            $idadmin = $this->input->get('idadmin');
            $data = $this->Admins->idselection($idadmin);
            $this->Admins->Supprimer($idadmin);

            redirect(site_url("donner/LaboAdmin/EspaceAd"));
        }

        public function Modifier()
        {
            $idadmin = $this->input->get('idadmin');
            $this->data['compte'] = $this->Admins->idselection($idadmin);
            // $this->data['compte'] = $this->Admins->Selection();

            // $this->load->view('Dossier/Tete/Header');
            $this->load->view("Dossier/form_validation_modad", $this->data);

            if($this->input->post("modifier"))
            {
                $idadmin = $this->input->post('idad');
                $NomAdmin = $this->input->post('modnom');
                $EmailAdmin = $this->input->post('modmail');
                $MotdepasseAdmin = $this->input->post('modpassword');
                $Etatcompte = $this->input->post('modetat');

                $data = array(
                    'idadmin'=>$idadmin,
                    'NomAdmin'=>$NomAdmin,
                    'EmailAdmin'=>$EmailAdmin,
                    'MotdepasseAdmin'=>$MotdepasseAdmin,
                    'Etatcompte'=>$Etatcompte
                );

                $this->Admins->Modifier($data);

                redirect(site_url("donner/LaboAdmin/EspaceAds"));
                
            }
        }
    }