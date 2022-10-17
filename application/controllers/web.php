<?php
// Controller
defined('BASEPATH') or exit('No direct script access allowed');

class web extends CI_Controller
{
    public function index()
	{
		echo "WEB Framework";
	}

	public function tampil()
	{
		return $this->load->view('v_tampil');
	}
}