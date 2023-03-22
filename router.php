<?php

switch ($page) {
        //index.php?page=home
    case 'home':
        break;
    case 'client':
        include './Controllers/Client.php';
        $client = new Client();
        if ($action == 'list') {
            $view = $client->list();
        }
        elseif ($action == 'form') {
            $view = $client->form();
        }
        elseif ($action == 'delete') {
            $client->delete();
        }
        break;
    case 'projet':
        //index.php?page=projet&action=list
        include './Controllers/projet.php';
        $projet = new Projet();
        if ($action == 'list') {
            $view = $projet->list();       
          //  include './Views/Projet/liste.php';
        }
        break;
    default:
    // 404
        break;
}
