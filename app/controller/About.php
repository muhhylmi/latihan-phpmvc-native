<?php  

/**
 * 
 */
class About extends Controller{
	
	public function index(){
		$data['judul']="About Me";
		$data['nama'] = "UCOK"; 
		$data['alamat'] = "Klaten , Jawa Tengah";

		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}

	public function page(){
		$data['judul'] = "Page About";

		$this->view('templates/header', $data);
		$this->view('about/page', $data);
		$this->view('templates/footer');

	}
}