<?php
class Index extends CI_Controller {

	public function index()
	{
        $this->load->view('template/header.php');
		$this->load->view('template/navbar_main.php');
		$this->load->view('page/index.php');
		$this->load->view('template/footer.php');
	}
}