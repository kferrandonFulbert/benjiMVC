<?php

$page = (isset($_GET['page']))?$_GET['page']:'home';
$action = (isset($_GET['action']))?$_GET['action']:'list';
switch($page){
    //index.php?page=home
    case 'home':
        include './Views/home/home.php';
        break;
    case 'client':
        //index.php?page=client&action=list
        include './Controllers/Client.php';
        $client = new Client();
        if($action=='list'){
            $view = $client->list();
            include './Views/Client/liste.php';
        }
        break;
    default:
        break;
}
