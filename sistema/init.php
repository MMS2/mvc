<?php
ob_start();
ini_set('display_errors',0);
ini_set('display_startup_erros',0);
error_reporting(E_ALL);
header("Content-type: text/html;charset=utf-8");


//REQUIRIMENTO DE SISTEMA
require_once "sistema/config.php";
require_once "sistema/init_func.php";
require_once "sistema/smodel.php";
require_once "sistema/scontroler.php";
require_once "sistema/app.php";

//INICIANDO APLICAÇÃO
$app = new App;

?>