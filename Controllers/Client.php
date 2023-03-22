<?php
require_once "./Models/Client.php";
class Client
{
    private $_clientModel;

    public function __construct()
    {
        $this->_clientModel = new dbClient();
    }
    public function list()
    {
        return ['clients' => $this->_clientModel->list()];
    }
    public function form()
    {
        /**
         * Validation du formulaire
         */
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->update();
        } else {
            // affichage du formulaire avec recupération du client
            $form = "";
            if (isset($_GET['id'])) {
                $form = $this->_clientModel->getOneById($_GET['id']);
            }
        }
        return ['form' => $form];
    }
    private function update()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);
        $siret = filter_input(INPUT_POST, 'siret', FILTER_SANITIZE_SPECIAL_CHARS);
        $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_SPECIAL_CHARS);
        $adresse = filter_input(INPUT_POST, 'adresse', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->_clientModel->update($id, $nom, $siret, $status, $adresse);
        header('location: ./index.php?page=client&action=list');
    }
}
