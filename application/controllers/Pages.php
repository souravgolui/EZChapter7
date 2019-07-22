<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Pages extends MY_Controller{

		public $CI = NULL;
		public function __construct() {
	        parent::__construct();
	        $this->CI = & get_instance();
	    }
	    public function pdf()
	    {
	    	$this->load->view('Element/header');
	    	$this->load->view('Pages/pdf');
	    	$this->load->view('Element/footer');
	    }
		public function index()
		{

			//$this->load->helper("html");
			$this->load->view('Element/header');
			$this->load->view('Pages/dashboard');
			$this->load->view('Element/footer');	
			 
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

			$where =  array('id'=>$data['id']);
			$q=$this->db->where($where)
						->get("users");
			$userData = $q->result_array();
			//echo "<pre>";print_r($userData);exit();
			$this->session->set_userdata($userData[0]);

			$this->db->last_query(); 

			redirect('/');
		}

		public function lCenter()
		{
			$this->load->database();
				
			if(isset($_GET['cataId'])){
				
				$where = 'catagory LIKE "%'.$_GET['cataId'].'%"';
				$q=$this->db->where($where)
				->get("artical");

			}else{
				$q=$this->db
				->get("artical");
			}	
			

			$where = array('status' => '1');	
			$r=$this->db->where($where)
					->get("catagory");

			$data['catagory'] = $r->result_array();
			$data['artical'] = $q->result_array();
			$data['catagory'] = $r->result_array();
		
			$this->load->view('Element/header');
			$this->load->view('Pages/learning-center', $data);
			$this->load->view('Element/footer');	
		}

		public function getCatagoryName($value)
		{
			$q = $this->db->query("select * from catagory where id IN (".$value.")");
			$data = $q->result_array();

			return $data;
		}

		public function lCenterViewmore()
		{	
			$id = $this->uri->segment(2);
			 $this->load->database();
			 $q = $this->db->query("select * from artical where id=".$id);
				
			 $data['ar'] = $q->result_array();

			$this->load->view('Element/header');
			$this->load->view('Pages/learning-center-viewmore',$data);
			$this->load->view('Element/footer');
			
		}

		public function term()
		{	
			$this->load->view('Element/header');
			//$this->load->view('Pages/terms-conditions');

			$data = array();
			$this->load->database();
				//$q=$this->db->query("select * from customer");
			
				$where = 'option IN("terms")';	
				$q=$this->db->where($where)
					->get("site_settings");
				//return $q->result();
				$data['site_settings'] = $q->result_array();
			//$data['customer']=$this->Adminmodel->getUserdata();
			//$this->load->helper("html");
			$this->load->view('Pages/terms-conditions',$data);

			$this->load->view('Element/footer');
		}

		public function fresh()
		{
			
			$this->load->view('Element/header');
			
			$data = array();
			$this->load->database();
			if(isset($_GET['cataId'])){
			$where = 'fresh_catagory LIKE "%'.$_GET['cataId'].'%"';

			$r=$this->db->where($where)
				->get("fresh_artical");

			}else{
				$r=$this->db
				->get("fresh_artical");
			}	

			$q=$this->db->query("select * from fresh_catagory");

			/*$r=$this->db->get("fresh_artical");*/
			$data['fresh'] = $r->result_array();
			
			$data['catagory']=$q->result_array();
			//$this->load->helper("html");

			$this->load->view('Pages/fresh',$data);

			$this->load->view('Element/footer');
		
		}

		public function freshViewmore()
		{	
			$id = $this->uri->segment(2);
			
			 $this->load->database();
			 $q = $this->db->query("SELECT FA.*,FC.cata_name as category_name FROM `fresh_artical` as FA INNER JOIN `fresh_catagory` as FC on FC.id = FA.cata_id WHERE FA.id =".$id);
				
			$data = $q->row_array();

			 
			$this->load->view('Element/header');
			$this->load->view('Pages/fresh-start-viewmore',$data);
			$this->load->view('Element/footer');
			
		}

		public function getFreshArticle(){
			$id = $_REQUEST['id'];
			
			$this->load->database();
			if($id > 0){
				$where = 'cata_id LIKE "%'.$id.'%"';	
				$r=$this->db->where($where)
					->get("fresh_artical");
			}else{
				$r=$this->db->query("SELECT * FROM fresh_artical");
			}

			
			$data = $r->result_array();
			$html = '';
			if(!empty($data)){
				foreach ($data as $key => $value) {
			
					$html .= '<div class="storybox-col">';
					$html .= '<div class="storybox">';
					$html .= '<h2>'.$value['artical_title'].'</h2>';
					$html .= '<p>';
					$html .= $value['short_description'];

					$html .= '<small>— '.$value['created'].'</small>';
					$html .= '</p>';
					$html .= '<a class="readmore" href="'.base_url().'freshViewmore/'.$value['id'].'">Read More <i class="fa fa-long-arrow-right"></i></a>';
					$html .= '</div>';
					$html .= '</div>';
				}
			}else{
				$html = '<div class="fulfilling-storybox"><h3 class="">No Articles Are Available</h3></div>';
			}
			echo $html;
			exit();
		}


		public function software()
		{
			
			$this->load->view('Element/header');
			
			$data = array();
			$this->load->database();
				//$q=$this->db->query("select * from customer");
			
				$where = 'option IN("software")';	
				$q=$this->db->where($where)
					->get("site_settings");
				//return $q->result();
				$data['site_settings'] = $q->result_array();
			//$data['customer']=$this->Adminmodel->getUserdata();
			//$this->load->helper("html");
			$this->load->view('Pages/software',$data);
			$this->load->view('Element/footer');
		
		}

		public function ourProcess()
		{
			$this->load->view('Element/header');
			$data = array();
			$this->load->database();
				//$q=$this->db->query("select * from customer");
			
				$where = 'option IN("process")';	
				$q=$this->db->where($where)
					->get("site_settings");
				//return $q->result();
				$data['site_settings'] = $q->result_array();
			//$data['customer']=$this->Adminmodel->getUserdata();
			//$this->load->helper("html");
			$this->load->view('Pages/our-process',$data);
			$this->load->view('Element/footer');
		}
		public function team()
		{
			$this->load->view('Element/header');
			$data = array();
			$this->load->database();
				//$q=$this->db->query("select * from customer");
			
				$where = 'option IN("team")';	
				$q=$this->db->where($where)
					->get("site_settings");
				//return $q->result();
				$data['site_settings'] = $q->result_array();
			//$data['customer']=$this->Adminmodel->getUserdata();
			//$this->load->helper("html");
			$this->load->view('Pages/team',$data);
			$this->load->view('Element/footer');
		}
		public function career()
		{
			$this->load->view('Element/header');
			$data = array();
			$this->load->database();
				//$q=$this->db->query("select * from customer");
			
				$where = 'option IN("career")';	
				$q=$this->db->where($where)
					->get("site_settings");
				//return $q->result();
				$data['site_settings'] = $q->result_array();
			//$data['customer']=$this->Adminmodel->getUserdata();
			//$this->load->helper("html");
			$this->load->view('Pages/career',$data);
			$this->load->view('Element/footer');
		}

		public function supporters()
		{
			$this->load->view('Element/header');
			$data = array();
			$this->load->database();
				//$q=$this->db->query("select * from customer");
			
				$where = 'option IN("supporters")';	
				$q=$this->db->where($where)
					->get("site_settings");
				//return $q->result();
				$data['site_settings'] = $q->result_array();
			//$data['customer']=$this->Adminmodel->getUserdata();
			//$this->load->helper("html");
			$this->load->view('Pages/supporters',$data);
			$this->load->view('Element/footer');
		}

		public function Login()
		{
			$this->load->view('Element/header');
			//$this->load->helper("html");
			if(isset($_GET['errMsg'])){
				$data['err'] = $_GET['errMsg'];
			}else{
				$data['err'] = '';
			}
			$this->load->view('Pages/login', $data);
			$this->load->view('Element/footer');
		}

		public function log()
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			if(array_key_exists('rem', $this->input->post())){
				$rem = $this->input->post('rem');
			}else{
				$rem= 'off';
			}
			$this->load->database();
			$where =  array('username'=>$email, 'password'=> $password,'user_type'=> 'U');
			$q=$this->db->where($where)
						->get("users");
			$userData = $q->row_array();

			if(!empty($userData)){
				
				if($rem == 'on'){
					$this->input->set_cookie('userdetails', $userData, time()+3600*365);
				}
				
				 $this->session->set_userdata($userData);
				 
				redirect('dashboard');
			}else{
				
				redirect('login?errMsg=Login error');
			}
			exit();
		}
		
		public function logout()
		{
			//$this->session->unset_userdata('__ci_last_regenerate');
			$this->session->sess_destroy();
			redirect('login');
		}

		public function forgetPass()
		{	
			$this->load->view('Element/header');
			if(isset($_GET['errMsg'])){
				$data['err'] = $_GET['errMsg'];
			}else{
				$data['err'] = '';
			}
			$this->load->view('Pages/forgotten-password', $data);
			$this->load->view('Element/footer');
		}
		public function forpass()
		{
			$email = $this->input->post('email');

			$this->load->database();
			$where =  array('username'=>$email);
			$q=$this->db->where($where)->get("users");
			$userData = $q->row_array();
			
			if(!empty($userData)){
				//echo "<pre>";print_r($userData);exit();
				/* FORGET PASSWORD MAIL */
				$this->load->library('email');
				$fromemail= "support@ezchapter7.com";
				$toemail = $email;
				$subject = "Mail Subject is here";
				$data=array();
				$data['id'] = $userData['id'];
				
				$mesg = $this->load->view('template/forget_email',$data,true);

				$config=array(
				'charset'=>'utf-8',
				'wordwrap'=> TRUE,
				'mailtype' => 'html'
				);

				$this->email->initialize($config);

				$this->email->to($toemail);
				$this->email->from($fromemail, "Title");
				$this->email->subject($subject);
				$this->email->message($mesg);
				$mail = $this->email->send();
				if($mail){

					redirect('forgetpass?msg=Email Send success. please check your email');
				}else{
					redirect('forgetpass?msg=Email Send failed');
				}
				/* FORGET PASSWORD MAIL */
				
				}else{
					
					redirect('forgetpass?msg=Sorry! You are not registered to us.');
				}
				exit();
			}	

		public function cpass()
		{
			$this->load->view('Element/header');
			 $id = $_GET['id'];
				
			 $data['id'] = $id;
			$this->load->view('Pages/changepass',$data);
			$this->load->view('Element/footer');
		} 

		public function updatepass()
		{

			$data = $this->input->post();
			/*echo '<pre>';
			print_r($data);
			exit();*/
			unset($data['submit']);
			$this->load->database();

			$data2 = array( 
				 
				'password' => $data['password'],
			);	

			$this->db->where('id', $data['id']);
			$this->db->update('users', $data2);

			$this->db->last_query();
			redirect('login');
		}

		public function signup_view()
		{
			$this->load->view('Element/header');
				$userData = array();
				$this->load->database();
				
				$q=$this->db->get("users");
				
				$userData['users'] = $q->result_array();

			
			$this->load->view('Pages/signup',$userData);
			$this->load->view('Element/footer');
		}

		public function save()
		{
			$Email = $this->input->post('email');
			$Password = $this->input->post('password');
			$Firstname = $this->input->post('firstname');
			$Lastname = $this->input->post('lastname');
			
			
			$data = [
				'username'=>$Email,
				'password' => $Password,
				'firstname' => $Firstname,
				'lastname' => $Lastname,
				'user_type' => 'U',
				'status' => '1'
			];


			$this->load->database();

			$this->db->insert('users',$data);

		$this->session->set_userdata($data);
			redirect('dashboard');
		}

		public function search_artical()
		{
			$keyword = $_REQUEST['keyword'];
			//$keyword = 'Lorem';
			$this->load->database();
			$query = "select * from artical where artical_title LIKE '%".$keyword."%' OR short_description LIKE '%".$keyword."%' OR first_artical LIKE '%".$keyword."%' OR secound_artical LIKE '%".$keyword."%'";	
			
			$q= $this->db->query($query);

			header('Content-type: application/json');
			echo json_encode($q->result_array());
			exit();
		}
		
		/*public function press()
		{
			$this->load->view('Element/header');
			
			$this->load->database();

				$q=$this->db->get("press");
				
			$data['press'] = $q->result_array();

			$this->load->view('Pages/press',$data);
			$this->load->view('Element/footer');
		}*/
		
		public function popup()
		{
			$this->load->view('Element/header');
	
			$this->load->view('Pages/popup',$data);
			$this->load->view('Element/footer');
		}
	}	
?>	