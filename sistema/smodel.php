<?php
/**
 * MODEL
 */
class Smodel {

	private $db;
	private $tabela;

	public function __construct() {

		require_once "sistema/configdb.php";
		$db = mysql_connect($local, $user, $pass);
		if ($db) {
			mysql_select_db($dbname);
			return true;
		} else {
			"nao conectou erro no <br> " . mysql_error();
		}
	}

	//VER DADOS DA TABELA /  WHERE 
	public function verbd($tabela, $where = null, $order = null) {

		$sql = mysql_query("select * froma " . $tabela . " ". $where	. "" . $order);
		$linhas = mysql_num_rows($sql);
		if ($linhas = !0) {
			while ($return = mysql_fetch_object($sql)) {
				$pega[] = $return;
			}
			if ($pega) {
				return $pega;
			} else {
				echo "<div class='container'><div class='c16 colunas apperro'>". mysql_error()."</div></div>";
			}
		} else {
			return false;
		}
	}


public function insertdb($tabela,$data) {
	   $sql  = "INSERT INTO ".$tabela;
   $sql .= " (`".implode("`, `", array_keys($data))."`)";
   $sql .= " VALUES ('".implode("', '", $data)."') ";

	if($sql){
			return mysql_query($sql);
	}
else{

	echo mysql_error();
}
	}


	public function delete($tabela, $data){
	   $sql  = "DELETE FROM ".$tabela." WHERE ".implode("`, `", array_keys($data))." = '".implode("', '", $data)."'";
	 if($sql){
	 	  return mysql_query($sql);
	 }else{


	 	echo mysql_error();
	 }
	}

}
?>