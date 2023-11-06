<?php


namespace src\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use src\Entity\avisController;
use src\form\formavis;

class AdminAvisProduitController extends ModuleAdminController
{
    public function __construct()
    {
        $this->table = 'avis_produit';
        $this->className = 'AvisProduit';
        $this->bootstrap = true;
        parent::__construct();

       
        $this->fields_list = [
            'id_avis_produit' => ['title' => 'ID'],
            'id_produit' => ['title' => 'ID Produit'],
            'auteur' => ['title' => 'Auteur'],
            'commentaire' => ['title' => 'Commentaire'],
            'date_avis' => ['title' => 'Date de l\'avis'],
        ];
    }

    public function renderList()
    {
      
        return parent::renderList();
    }

    public function renderForm()
    {
       
        return parent::renderForm();
    }

    public function postProcess()
    {
       
        if (Tools::isSubmit('submitAdd' . $this->table)) {
            $this->processAdd();
        } elseif (Tools::isSubmit('submitAdd' . $this->table . 'AndStay')) {
            $this->processAdd(true);
        } elseif (Tools::isSubmit('submitUpdate' . $this->table)) {
            $this->processUpdate();
        }
    }

    private function processAdd($stay = false)
    {
        $avis = new AvisProduit();
        $avis->id_produit = (int) Tools::getValue('id_produit');
        $avis->auteur = Tools::getValue('auteur');
        $avis->commentaire = Tools::getValue('commentaire');
        $avis->date_avis = date('Y-m-d H:i:s');
        
        if ($avis->save()) {
            $this->confirmations[] = $this->l('Avis ajouté avec succès.');
            if (!$stay) {
                $this->redirect_after = self::$currentIndex . '&token=' . $this->token;
            }
        } else {
            $this->errors[] = $this->l('Erreur lors de l\'ajout de l\'avis.');
        }
    }


}

