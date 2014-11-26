<?php

/**
* Publico
*/
class Publico
{

public $array = array();

//CSS
static function css($data){
$css = strtolower($data);
echo '<link rel="stylesheet" href="'.CSSPUBLIC.$css.'.css">'."\n";
}


static function js($data){
$js = strtolower($data);
echo '<script type="text/javascript" src="'.JSPUBLIC.$js.'.js" ?>" ></script>'."\n";
}


static function img($img, $alt= null){
echo "<img src='".IMGPUBLIC.$img."' alt='".$alt."'/>";
}

static function imglink( $img, $alt=null){
echo "<img src='".$img."' alt='".$alt."'/>";

}

//IMAGEM LINK
static function linkimagempasta($a,$titulo, $img, $array){
	echo  "<a href='".strtolower(BASEURL.$a)."' title='".$titulo."' >\n";
	echo "<img src='".IMGPUBLIC.$img."' $array />";
	echo "</a>\n";
}

static function linkimagemurl($a,$titulo, $img, $array){
	echo  "<a href='".strtolower($a)."' title='".$titulo."' target='new' >\n";
	echo "<img src='".$img."' $array />";
	echo "</a>\n";
}
}

?>
