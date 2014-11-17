<?php

require('vista.php');	

class MaquinaView extends View{
		
	function set_maquinas($arrM){
		$this->smarty->assign("maquinas",$arrM);
	}
	function set_imgMaq($arrIM){
		$this->smarty->assign("imagenes",$arrIM);		
	}

	function render(){
		$this->smarty->display('maquina.tpl');
	}	

	function renderCM(){
		$this->smarty->display('carouselMaq.tpl');
	}

}

?>