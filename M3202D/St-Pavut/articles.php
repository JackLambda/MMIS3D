<?php

class articles extends CI_Controller {

	public function index() // tous les controlleurs doivent avoir obligatoirement une fonction index(), même si il n'y a pas d'index
	{
		// echo "<p>bonjour</p>";
		$this->load->model('articles_model');
		$toto = $this->articles_model->touslesarticles();
		
		$this->load->view('articles_view');
	}

}

?>
