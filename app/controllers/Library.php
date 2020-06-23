<?php

class Library extends Controller {
	public function index()
	{	
		$data['judul'] = 'home';
		$data['nama'] = $this->model('User_model')->getUser();
		$this->view('templates/header',$data);
		$this->view('library/index', $data);
		$this->view('templates/footer');
	}
}