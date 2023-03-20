<?php

$page = (isset($_GET['page'])) ? $_GET['page'] : 'home';
$action = (isset($_GET['action'])) ? $_GET['action'] : 'list';
include './router.php';
include './Views/base.php';

