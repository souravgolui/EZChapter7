<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Pages extends MY_Controller{

		public $CI = NULL;
		public function __construct() {
	        parent::__construct();
	        $this->CI = & get_instance();
	    }

	    public function index()
		{

			//$this->load->helper("html");
		$this->load->view('Element/header');
			$this->load->view('Pages/dashboard');
			$this->load->view('Element/footer');	
			 
		}

		public function profileEdit()
		{
			if(!isset($_SESSION['userData'])){
				redirect('admin');
			}
			 $id = $this->uri->segment(2);
			 $this->load->database();
			 $q = $this->db->query("select * from users where id=".$id);
				
			 $data['users'] = $q->result_array();
			$this->load->view('Element/header',$data);
			/*$this->load->view('Element/A_footer'); */
		}

		
		public function profileUpdate()
		{
			$data = $this->input->post();
			//echo "<pre>";print_r($data);exit();
			unset($data['submit']);
			$this->load->database();



			$data2 = array( 
				 
				'username' => $data['email'], 
				
				'firstname'=> $data['firstname'],
				'lastname' => $data['lastname']
				
			);
			

			$this->db->where('id', $data['id']);
			$this->db->update('users', $data2);

			$this->db->last_query(); 

			redirect('index');
		}
}
?>