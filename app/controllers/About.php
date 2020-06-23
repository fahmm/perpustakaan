<?php

class About extends Controller{
	public function index($nama = 'fahmi',$pekerjaan = 'pengangguran', $umur = 25)
	{
		$data['nama'] = $this->model('User_model')->getUser();		
		$this->view('templates/header',$data);
		$this->view('templates/header');
		$this->view('about/index',$data);
		$this->view('templates/footer');
	}	
	public function page()
	{
		$data['judul'] = 'page';
		$this->view('templates/header',$data);
		$this->view('templates/header');
		$this->view('about/page');
		$this->view('templates/footer');
	}
}