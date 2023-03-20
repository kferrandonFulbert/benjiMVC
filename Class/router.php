<?php
switch ($page) {
        //index.php?page=home
    case 'home':
        include './Views/home/home.php';
        break;
    case 'client':
        //index.php?page=client&action=list
        include './Controllers/Client.php';
        $client = new Client();
        if ($action == 'list') {
            $view = $client->list();
            include './Views/Client/liste.php';
        }
        break;
    case 'projet':
        //index.php?page=projet&action=list
        include './Controllers/projet.php';
        $projet = new Projet();
        if ($action == 'list') {
            $view = $projet->list();       
            include './Views/Projet/liste.php';
        }
        break;
    default:
    // 404
        break;
}