<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Layout extends MY_Controller{


		public function index()
		{
			$this->load->view('Element/header');
			//$this->load->helper("html");
			$this->load->view('Layout/index');
			$this->load->view('Element/footer');


		}

	}
?>	