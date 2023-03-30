<?php

$page = (isset($_GET['page'])) ? $_GET['page'] : 'home';
$action = (isset($_GET['action'])) ? $_GET['action'] : 'list';


require('./libs/Smarty.class.php');
$smarty = new Smarty();


$smarty->setTemplateDir('./Views/');
$smarty->setCompileDir('./smarty/templates_c');
$smarty->setCacheDir('./smarty/cache');
//$smarty->setConfigDir('./smarty/configs');
include './router.php';

$smarty->assign('view', $view);
$smarty->assign('url', "$page/$action.tpl");

$smarty->display('base.tpl');

//include './Views/base.php';

