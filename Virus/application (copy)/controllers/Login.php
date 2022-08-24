<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent :: __construct();

        $this->load->helper(array('url', 'form'));

        $this->load->Model('ModelAdmin/Admins');
        $this->load->Model('ModelArticle/Cosmeherits');

        $this->load->library(array('form_validation'));

        $this->data['header'] = $this->load->view('Dossier/Tete/Header', '', true);
    }

    public function Salacompte()
    {
        if($this->input->server("REQUEST_METHOD") == "POST")
        {
            $this->form_validation->set_rules('nom', '', 'required', array('required'=>'Veuillez-Saisir Un nom SVP'));
            $this->form_validation->set_rules('mail', '', 'required', array('required'=>'Veuillez-Saisir Un Mail Valide SVP !'));
            $this->form_validation->set_rules('password', '', 'required', array('required'=>'Veuillez-Saisir Un Mot de Passe SVP !'));

            if($this->form_validation->run())
            {
                $NomAdmin = $this->input->post('nom');
                $EmailAdmin = $this->input->post('mail');
                $MotdepasseAdmin = $this->input->post('password');
                // $MotdepasseAdmin = md5($MotdepasseAdmin);
                $Etatcompte = $this->input->post('etat');
                
                    $data = array(
                        'NomAdmin'=>$NomAdmin,
                        'EmailAdmin'=>$EmailAdmin,
                        'MotdepasseAdmin'=>$MotdepasseAdmin,
                        'Etatcompte'=>$Etatcompte,
                        'DateCreation'=>Date('d-m-Y a H:s')
                    );
                    $this->Admins->Sauvegarder($data);
                
                redirect(site_url("Login/Salacompte"));
            }

        }
        $this->load->view("Dossier/login");
    }


    public function Authen()
    {
        $this->data['titre'] = "Authentification";

        $this->form_validation->set_rules('nom', '', 'required', array('required'=>'Veuillez-Saisir Votre Mail !'));
        $this->form_validation->set_rules('password', '', 'required', array('required'=>'Veuillez-Saisir Votre Mot de passe !'));

        if($this->form_validation->run())
        {
            $EmailAdmin = $this->input->post('nom');
            $MotdepasseAdmin = $this->input->post('password');
            // $MotdepasseAdmin = md5($MotdepasseAdmin);
            $Etatcompte = 2;

            $query = $this->db->query("select * from Administrateur where EmailAdmin='$EmailAdmin' and MotdepasseAdmin='$MotdepasseAdmin' and Etatcompte='2'");

            $row = $query->result();

            if(count($row)>0)
            {
                $row = $row[0];

                $this->session->set_userdata(
                    [
                        'idadmin'=>$row->idadmin,
                        'NomAdmin'=>$row->NomAdmin,
                    ]
                );

                $this->form_validation->set_rules('search', '', 'required', array('required'=>'Veuillez-Saisir un Mot de Recherche !'));

                if($this->form_validation->run())
                {
                    $Nom_Article = $this->input->post("search");

                    $res = $this->Cosmeherits->Rechercher($Nom_Article);

                }
                else
                {
                    $res = [];
                }
                $this->data['titre'] = "";
                // $idcosme = $this->input->get('idcosme');
                // $this->data['cosmetique'] = $this->Cosmeherits->Selection();
                // $this->data['cosmetique'] = $this->Cosmeherits->idselection();
                $idpharma = $this->input->get('idart');

                $this->data['idpharma'] = $this->Cosmeherits->idselection('idpharma');
                $this->data['cosmetique'] = $this->Cosmeherits->selection();
                $this->data['recherche'] = $res;

                
                
                $this->load->view('Dossier/form_validation', $this->data);

            }
            else
            {
                $this->session->set_flashdata('error', 'Email ou Mot de passe Incorrect !');

                $this->load->view('Dossier/login');
            }
        }
    }

// debut de l'authentification du super admin
    public function Authens()
    {
        $this->data['titre'] = "Authentification";

        $this->form_validation->set_rules('nom', '', 'required', array('required'=>'Veuillez-Saisir Votre Mail !'));
        $this->form_validation->set_rules('password', '', 'required', array('required'=>'Veuillez-Saisir Votre Mot de passe !'));

        if($this->form_validation->run())
        {
            $EmailAdmin = $this->input->post('nom');
            $MotdepasseAdmin = $this->input->post('password');
            // $MotdepasseAdmin = md5($MotdepasseAdmin);
            $Etatcompte = 1;

            $query = $this->db->query("select * from Administrateur where EmailAdmin='$EmailAdmin' and MotdepasseAdmin='$MotdepasseAdmin' and Etatcompte='1'");

            $row = $query->result();

            if(count($row)>0)
            {
                $row = $row[0];

                $this->session->set_userdata(
                    [
                        'idadmin'=>$row->idadmin,
                        'NomAdmin'=>$row->NomAdmin,
                    ]
                );

                $this->form_validation->set_rules('search', '', 'required', array('required'=>'Veuillez-Saisir un Mot de Recherche !'));

                if($this->form_validation->run())
                {
                    $Nom_Article = $this->input->post("search");

                    $res = $this->Cosmeherits->Rechercher($Nom_Article);

                }
                else
                {
                    $res = [];
                }
                $this->data['titre'] = "";
                // $idcosme = $this->input->get('idcosme');
                // $this->data['cosmetique'] = $this->Cosmeherits->Selection();
                // $this->data['cosmetique'] = $this->Cosmeherits->idselection();
                $idpharma = $this->input->get('idart');

                $this->data['idpharma'] = $this->Cosmeherits->idselection('idpharma');
                $this->data['cosmetique'] = $this->Cosmeherits->selection();
                $this->data['recherche'] = $res;

                
                
                $this->load->view('Dossier/tables_donners', $this->data);

            }
            else
            {
                $this->session->set_flashdata('error', 'Email ou Mot de passe Incorrect !');

                $this->load->view('Dossier/logins');
            }
        }
        $this->load->view('Dossier/logins');
    }
    // fin de l'authentifiaction du super admin

    // debut de la modification super admin

    public function Modifier()
    {
        $idpharma = $this->input->get('idpharma');
        $this->data['article'] = $this->Cosmeherits->idselection($idpharma);
        // $this->data['article'] = $this->Cosmeherits->Selection();
        // $this->load->view();
        $this->load->view('Dossier/form_validation_mods', $this->data);

        if($this->input->post("modifier"))
        {
            $idpharma = $this->input->post('idart');
            $Nom_Article = $this->input->post('nommod');
            $Code_Article = $this->input->post('codemod');
            $Prix_F = $this->input->post('modprixf');
            $Qte_T = $this->input->post('modqte');
            $Qte_V = $this->input->post('qtevmod');
            $b = $Qte_T - $Qte_V;
            $Qte_R = $this->input->post('modqter');
            $Qte_R = $b;
            $Date_F = $this->input->post('moddatef');
            $Date_P = $this->input->post('moddatep');

            $data = array(
                'idpharma'=>$idpharma,
                'Nom_Article'=>$Nom_Article,
                'Code_Article'=>$Code_Article,
                'Prix_F'=>$Prix_F,
                'Qte_T'=>$Qte_T,
                'Qte_V'=>$Qte_V,
                'Qte_R'=>$Qte_R,
                'Date_F'=>$Date_F,
                'Date_P'=>$Date_P
            );
            $this->Cosmeherits->Modifier($data);
            redirect(site_url("donner/Table_Cosme/Tindas"));
        }

    }
// fin de la modification du super admin

// debut de la suppression du super admin
    public function Supprimer()
    {
    $idpharma = $this->input->get('idpharma');
    $data = $this->Cosmeherits->idselection($idpharma);
    $this->Cosmeherits->Supprimer($idpharma);

    redirect(site_url("donner/Table_Cosme/Tindas"));
    }
// fin de la suppression du super admin
    
}