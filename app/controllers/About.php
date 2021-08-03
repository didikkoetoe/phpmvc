<?php

class About extends Controller
{
	public function index($nama = 'Didik Prabowo', $pekerjaan = 'keryawan swasta', $umur = 19)
	{
		$data["nama"] = $nama;
		$data["pekerjaan"] = $pekerjaan;
		$data["umur"] = $umur;
		$this->view('about/index');
	}

	public function page()
	{
		$this->view('about/page');
	}
}
