<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends MY_Controller{
		public $CI = NULL;
		public function __construct() {
	        parent::__construct();
	        $this->CI = & get_instance();
	    }


		public function index()
		{
			if(isset($_SESSION['userData'])){
				redirect('home');
			}
			$this->load->view('Admin/login');
		}

		public function home()
		{	
			//echo $_SESSION['userData'];exit();
			if(!isset($_SESSION['userData'])){
				redirect('admin');
			}
			$this->load->view('Admin/index');
	 
		}

		public function forgetPass()
		{	
			
			if(isset($_GET['errMsg'])){
				$data['err'] = $_GET['errMsg'];
			}else{
				$data['err'] = '';
			}
			$this->load->view('Admin/forgotten-password', $data);
		
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
				
				$mesg = $this->load->view('template/A_forget_email',$data,true);

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

					redirect('A_forgetpass?msg=Email Send success. please check your email');
				}else{
					redirect('A_forgetpass?msg=Email Send failed');
				}
				/* FORGET PASSWORD MAIL */
				
				}else{
					
					redirect('A_forgetpass?msg=Sorry! You are not registered to us.');
				}
				exit();
			}	

		public function cpass()
		{
			
			 $id = $_GET['id'];
				
			 $data['id'] = $id;
			$this->load->view('Admin/changepass',$data);
			
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
			redirect('admin');
		}

		public function sPage()
		{
			if(!isset($_SESSION['userData'])){
				redirect('admin');
			}
			/*	$this->load->database();
			$where =  array('username'=>$email, 'password'=> $password);
			$q=$this->db->where($where)
						->get("users");
			$userData = $q->result_array();*/
			$data = array();
			$this->load->database();
				//$q=$this->db->query("select * from customer");
			
				$where = 'option IN("terms","process","career","supporters","team","software")';	
				$q=$this->db->where($where)
					->get("site_settings");
				//return $q->result();
				$data['site_settings'] = $q->result_array();
			//$data['customer']=$this->Adminmodel->getUserdata();
			//$this->load->helper("html");
			$this->load->view('Admin/list',$data);
			
		}
		public function Login()
		{

			$email = $this->input->post('email');
			$password = $this->input->post('password');
			//echo $rem = $this->input->post('rem');
			if(array_key_exists('rem', $this->input->post())){
				$rem = $this->input->post('rem');
			}else{
				$rem= 'off';
			}
			$this->load->database();
			$where =  array('username'=>$email, 'password'=> $password,'user_type'=> 'A');
			$q=$this->db->where($where)
						->get("users");
			$userData = $q->result_array();

			if(!empty($userData)){
				
				if($rem == 'on'){
					$this->input->set_cookie('userdetails', $userData, time()+3600*365);
				}
				
				$_SESSION['userData'] = $userData;

				redirect('static-page');
			}else{
				
				redirect('admin');
			}
			exit();
		}

		public function logout()
		{
			//$this->session->unset_userdata('__ci_last_regenerate');
			$this->session->sess_destroy();
			redirect('A_login');
		}

		public function edit_view()
		{
			if(!isset($_SESSION['userData'])){
				redirect('admin');
			}
			 /*$this->load->view('Element/A_left'); 
		 	$this->load->view('Element/A_header');*/

			 $id = $this->uri->segment(2);
			 $this->load->database();
			 $q = $this->db->query("select * from site_settings where id=".$id);
				
			 $data['site_settings'] = $q->result_array();
			$this->load->view('Admin/edit',$data);
			/*$this->load->view('Element/A_footer'); */
		}
		public function update()
		{
		
			$data = $this->input->post();
	
			unset($data['submit']);
			$this->load->database();



			$data2 = array( 
				 'title' => $data['title'],
				'value' => $data['editor'], 
				
			);
			

			$this->db->where('id', $data['id']);
			$this->db->update('site_settings', $data2);

			$this->db->last_query(); 

			redirect('static-page');
		}

		public function sDelete(){
			$id = $this->uri->segment(2);
			$this->load->database();
			$this->db->delete('site_secatagoryttings','id ='.$id);
			redirect('static-page');
		}

		public function uManagement()
		{
			if(!isset($_SESSION['userData'])){
				redirect('admin');
			}
			$data = array();
			$this->load->database();
			$where = array('user_type' => 'U');		
				$q=$this->db->where($where)
					->get("users");
			
				$data['users'] = $q->result_array();
			
			$this->load->view('Admin/user_management',$data);
			
		}

		public function uEdit()
		{
			if(!isset($_SESSION['userData'])){
				redirect('admin');
			}
			 $id = $this->uri->segment(2);
			 $this->load->database();
			 $q = $this->db->query("select * from users where id=".$id);
				
			 $data['users'] = $q->result_array();
			$this->load->view('Admin/user_edit',$data);
			/*$this->load->view('Element/A_footer'); */
		}

		public function uUpdate()
		{
			$data = $this->input->post();
			//echo "<pre>";print_r($data);exit();
			unset($data['submit']);
			$this->load->database();



			$data2 = array( 
				 
				'username' => $data['email'], 
				'password' => $data['password'],
				'firstname'=> $data['firstname'],
				'lastname' => $data['lastname']
				
			);
			

			$this->db->where('id', $data['id']);
			$this->db->update('users', $data2);

			$this->db->last_query(); 

			redirect('user_management');
		}

		public function uDelete()
		{
			

			$id = $this->uri->segment(2);
			$this->load->database();
			$this->db->delete('users','id ='.$id);

			redirect('user_management');
		}

		public function inactive(){
			$id = $this->uri->segment(2);
			$this->load->database();



			$data2 = array( 
				'status'=> '0'
			);
			

			$this->db->where('id', $id);
			$this->db->update('users', $data2);
			redirect('user_management');
		}

		public function active()
		{
			$id = $this->uri->segment(2);
			$this->load->database();



			$data2 = array( 
				'status'=> '1'
			);
			

			$this->db->where('id', $id);
			$this->db->update('users', $data2);
			redirect('user_management');
		}

		public function cManagement()
		{
			if(!isset($_SESSION['userData'])){
				redirect('admin');
			}
			$data = array();
			$this->load->database();
					
				$q=$this->db
					->get("catagory");
			
				$data['catagory'] = $q->result_array();
			
			$this->load->view('Admin/catagory_management',$data);
			
		}

		public function cAdd_view()
		{
			if(!isset($_SESSION['userData'])){
				redirect('admin');
			}
			$this->load->view('Admin/cata_add');
		
		}

		public function cADD()
		{
			$CatagoryName = $this->input->post('CatagoryName');
			

			$data = $this->input->post();

			$data = [
				'cata_name'=>$CatagoryName,
				
			];
		
			$this->load->database();
			$this->db->insert('catagory',$data);
			redirect('catagory');
		}

		public function Cedit_view()
		{
			if(!isset($_SESSION['userData'])){
				redirect('admin');
			}
			 $id = $this->uri->segment(2);
			 $this->load->database();
			 $q = $this->db->query("select * from catagory where id=".$id);
				
			 $data['cata'] = $q->result_array();
			$this->load->view('Admin/cata_edit',$data);
		}

		public function cUpdate()
		{

			$data = $this->input->post();
			//echo "<pre>";print_r($data);exit();
			unset($data['submit']);
			$this->load->database();



			$data2 = array( 
				 
				'cata_name' => $data['CatagoryName']
				
				
			);
			

			$this->db->where('id', $data['id']);
			$this->db->update('catagory', $data2);

			$this->db->last_query(); 

			redirect('catagory');
		}

		public function cDelete()
		{
			

			$id = $this->uri->segment(2);
			$this->load->database();
			$this->db->delete('catagory','id ='.$id);

			redirect('catagory');
		}

		public function aManagement()
		{
			if(!isset($_SESSION['userData'])){
				redirect('admin');
			}									
			$data = array();
			$this->load->database();
					
				$q=$this->db
					->get("artical");
			
				$data['artical'] = $q->result_array();
			
			
			$this->load->view('Admin/artical_management',$data);
		}



		public function artical_inactive(){
			$id = $this->uri->segment(2);
			$this->load->database();



			$data2 = array( 
				'status'=> '0'
			);
			

			$this->db->where('id', $id);
			$this->db->update('catagory', $data2);
			redirect('catagory');
		}

		public function artical_active()
		{
			$id = $this->uri->segment(2);
			$this->load->database();



			$data2 = array( 
				'status'=> '1'
			);
			

			$this->db->where('id', $id);
			$this->db->update('catagory', $data2);
			redirect('catagory');
		}

		public function aAdd_view()
		{
			if(!isset($_SESSION['userData'])){
				redirect('admin');
			}
			$this->load->database();
			$where = array('status' => '1');	
			$q=$this->db->where($where)
					->get("catagory");
			  
			$data['catagory'] = $q->result_array();
			//$data['ar'] = $r->result_array();
			//$data['id'] = $id;
			$this->load->view('Admin/artical_add',$data);
		
		}

		public function getCatagoryName($value)
		{
			$q = $this->db->query("select * from catagory where id IN (".$value.")");
			$data = $q->result_array();
			$strArr = array();
			foreach ($data as $key => $value) {
				$strArr[$key] = $value['cata_name'];
			}
			$str = implode(',', $strArr);

			return $str;
		}
		public function aADD()
		{
		
			$ArticalTitle = $this->input->post('ArticalTitle');
			$Catagory = implode(',',$this->input->post('Catagory')); 
			$ShortDescription = $this->input->post('ShortDescription'); 
			$FirstArtical = $this->input->post('FirstArtical'); 
			$SecoundArtical = $this->input->post('SecoundArtical');
			$data = [
				'artical_title'=>$ArticalTitle,
				'catagory' => $Catagory,
				'short_description' => $ShortDescription,
				'first_artical' => $FirstArtical,
				'secound_artical' => $SecoundArtical
			];
		
			$this->load->database();
			$this->db->insert('artical',$data);
			redirect('artical');
		}
		public function aEdit()
		{
			if(!isset($_SESSION['userData'])){
				redirect('admin');
			}
			 $id = $this->uri->segment(2);
			 $this->load->database();
			 $q = $this->db->query("select * from artical where id=".$id);
			 $where = array('status' => '1');	
			$r=$this->db->where($where)
					->get("catagory");
				
			 $data['catagory'] = $r->result_array();
			 $data['ar'] = $q->result_array();
			 $data['id'] = $id;
			$this->load->view('Admin/artical_edit',$data);
		}
		public function aUpdate()
		{
			$data = $this->input->post();
			//echo "<pre>";print_r($data);exit();
			unset($data['submit']);
			$this->load->database();



			$data2 = array( 
				 
				'artical_title' => $data['ArticalTitle'],
				'catagory' => implode(',',$data['Catagory']),
				'short_description' => $data['ShortDescription'],
				'first_artical' => $data['FirstArtical'],
				'secound_artical' => $data['SecoundArtical'],
				
			);
			

			$this->db->where('id', $data['id']);
			$this->db->update('artical', $data2);

			$this->db->last_query(); 

			redirect('artical');
		}
		public function aDelete()
		{
			

			$id = $this->uri->segment(2);
			$this->load->database();
			$this->db->delete('artical','id ='.$id);

			redirect('artical');
		}

		public function freshCataManagement()
		{
			if(!isset($_SESSION['userData'])){
				redirect('admin');
			}
			$data = array();
			$this->load->database();
					
				$q=$this->db
					->get("fresh_catagory");
			
				$data['fresh_catagory'] = $q->result_array();
			
			$this->load->view('Admin/freshCategory_management',$data);
			
		}

		public function freshCataAdd_view()
		{
			if(!isset($_SESSION['userData'])){
				redirect('admin');
			}
			$this->load->view('Admin/freshCata_add');
		
		}

		public function freshCataADD()
		{
			$CatagoryName = $this->input->post('CatagoryName');
			

			$data = $this->input->post();

			$data = [
				'cata_name'=>$CatagoryName,
				
			];
		
			$this->load->database();
			$this->db->insert('fresh_catagory',$data);
			redirect('freshCategory');
		}

		public function freshCataedit_view()
		{
			if(!isset($_SESSION['userData'])){
				redirect('admin');
			}
			 $id = $this->uri->segment(2);
			 $this->load->database();
			 $q = $this->db->query("SELECT * FROM fresh_catagory WHERE id=".$id);
			
			 $data['cata'] = $q->result_array();
			 $data['id'] = $id;
			 $this->load->view('Admin/freshCata_edit',$data);
		}

		public function freshCataUpdate()
		{

			$data = $this->input->post();
			//echo "<pre>";print_r($data);exit();
			unset($data['submit']);
			$this->load->database();



			$data2 = array( 
				 
				'cata_name' => $data['CatagoryName']
				
				
			);
			

			$this->db->where('id', $data['id']);
			$this->db->update('fresh_catagory', $data2);

			$this->db->last_query(); 

			redirect('freshCategory');
		}

		public function freshCataDelete()
		{
			

			$id = $this->uri->segment(2);
			$this->load->database();
			$this->db->delete('fresh_catagory','id ='.$id);

			redirect('freshCategory');
		}

		public function getfreshCatagoryName($value)
		{
			$q = $this->db->query("select * from fresh_catagory where id IN (".$value.")");
			$data = $q->result_array();
			$strArr = array();
			foreach ($data as $key => $value) {
				$strArr[$key] = $value['cata_name'];
			}
			$str = implode(',', $strArr);

			return $str;
		}

		public function freshManagement()
		{
			if(!isset($_SESSION['userData'])){
				redirect('admin');
			}									
			$data = array();
			$this->load->database();
					
			$q = $this->db->query("SELECT FA.*,FC.cata_name as category_name FROM `fresh_artical` as FA INNER JOIN `fresh_catagory` as FC on FC.id = FA.cata_id");
			
			$data['fresh_artical'] = $q->result_array();
			
			
			$this->load->view('Admin/fresh_management',$data);
		}

		public function freshAdd_view()
		{
			if(!isset($_SESSION['userData'])){
				redirect('admin');
			}
			$this->load->database();
			
			 $q=$this->db
					->get("fresh_catagory");
			
			$data['ar'] = $q->result_array();
			//echo  "<pre>";print_r($data);exit();
			//$data['id'] = $id;
			$this->load->view('Admin/freshartical_add',$data);
		
		}

		public function freshADD()
		{
		
			//echo "<pre>";print_r($_POST);exit();
			$ArticalTitle = $this->input->post('ArticalTitle');
			$ShortDescription = $this->input->post('ShortDescription'); 
			$FirstArtical = $this->input->post('FirstArtical'); 


			$Catagory = implode(',',$this->input->post('Catagory'));
		
			$data = [
				'artical_title'=>$ArticalTitle,
				'cata_id'=>$Catagory,
				'short_description' => $ShortDescription,
				'first_artical' => $FirstArtical,
				'created' => date('Y-m-d')
			];
		
			$this->load->database();
			$this->db->insert('fresh_artical',$data);
			redirect('freshstart');
		}

		public function freshEdit()
		{
			if(!isset($_SESSION['userData'])){
				redirect('admin');
			}
			 $id = $this->uri->segment(2);
			 $this->load->database();
			 $q = $this->db->query("select * from fresh_artical where id=".$id);
			
			 $r=$this->db
					->get("fresh_catagory");
			
			$data['fresh_catagory'] = $r->result_array();
			 $data['ar'] = $q->result_array();
			 $data['id'] = $id;

			$this->load->view('Admin/freshartical_edit',$data);
		}
		public function freshUpdate()
		{
			$data = $this->input->post();
			//echo "<pre>";print_r($data);exit();
			unset($data['submit']);
			$this->load->database();



			$data2 = array( 
				 
				'artical_title' => $data['ArticalTitle'],
				/*'cata_id' => $data['category_id'],*/
				'cata_id' => implode(',',$data['Catagory']),
				'short_description' => $data['ShortDescription'],
				'first_artical' => $data['FirstArtical'],
				
				
			);
			

			$this->db->where('id', $data['id']);
			$this->db->update('fresh_artical', $data2);

			$this->db->last_query(); 

			redirect('freshstart');
		}

		public function freshDelete()
		{
			

			$id = $this->uri->segment(2);
			$this->load->database();
			$this->db->delete('fresh_artical','id ='.$id);

			redirect('freshstart');
		}

		/*public function pressManagement()
		{
			if(!isset($_SESSION['userData'])){
				redirect('admin');
			}									
			$data = array();
			$this->load->database();
					
				$q=$this->db
					->get("press");
			
				$data['press'] = $q->result_array();
			
			
			$this->load->view('Admin/press_management',$data);
		}*/

		/*public function pressAdd_view()
		{
			if(!isset($_SESSION['userData'])){
				redirect('admin');
			}
			$this->load->database();
			
			 $q=$this->db
					->get("press");
			
			$data['ar'] = $q->result_array();
			//echo  "<pre>";print_r($data);exit();
			//$data['id'] = $id;
			$this->load->view('Admin/press_add',$data);
		
		}*/

	/*	public function pressADD()
		{
		
			//echo "<pre>";print_r($_POST);exit();
			$Title = $this->input->post('title');
			$Auther = $this->input->post('auther'); 
			$Link = $this->input->post('link'); 


			
		
			$data = [
				'title'=>$Title,
				'auther'=>$Auther,
				'link' => $Link,
				'created' => date('Y-m-d')
			];
		
			$this->load->database();
			$this->db->insert('press',$data);
			redirect('pressManagement');
		}*/

/*		public function pressEdit()
		{
			if(!isset($_SESSION['userData'])){
				redirect('admin');
			}
			 $id = $this->uri->segment(2);
			 $this->load->database();
			 $q = $this->db->query("select * from press where id=".$id);
			
			 $data['ar'] = $q->result_array();
			 $data['id'] = $id;

			$this->load->view('Admin/press_edit',$data);
		}*/

		/*public function pressUpdate()
		{
			$data = $this->input->post();
			//echo "<pre>";print_r($data);exit();
			unset($data['submit']);
			$this->load->database();



			$data2 = array( 
				 
				'title' => $data['title'],
				
				'auther' => $data['auther'],
				'link' => $data['link'],

			);
			

			$this->db->where('id', $data['id']);
			$this->db->update('press', $data2);

			$this->db->last_query(); 

			redirect('pressManagement');
		}
*/
	/*	public function pressDelete()
		{
			

			$id = $this->uri->segment(2);
			$this->load->database();
			$this->db->delete('press','id ='.$id);

			redirect('pressManagement');
		}*/
}
?>		