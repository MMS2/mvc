<?php



//STRINGS PASTA DA APLICAÇÃO
$pasta = "mvc";
$url = "http://".$_SERVER['SERVER_NAME']."/".$pasta."/";
$titulo = "DM MVC";


//STRINGS CONNSTANTES DEFINITIVAS
define(BASEURL, $url);
define(TITULOAPP, $titulo);
define(PUBLICURL, BASEURL."publico/");
define(IMGPUBLIC, PUBLICURL.'img/');
define(JSPUBLIC, PUBLICURL.'js/');
define(CSSPUBLIC, PUBLICURL.'css/');



?>