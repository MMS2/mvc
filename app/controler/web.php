<?php

class Web extends Scontroler{

	function index(){
	$data = array('conteudo'=>'index/index' );
	$this->view('index_template',$data);
	}


}


?>
