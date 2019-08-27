<?php 

class AdminCtrl extends CI_Controller{
	private $data;
	private $user_session_id;

	public function __construct(){
		parent:: __construct();
		$this->load->database();
		$this->load->model('LoginModel');
		$this->load->model('AdminModel');


		$this->user_session_id = $this->session->userdata('session_id');
		
		if (!isset($this->user_session_id)) {
			redirect('login');
		}

		else {
			// distribute all user information in all controller within this mother class AdminCtrlpar
			$this->data['user_data'] = $this->LoginModel->select_userID('*', $this->user_session_id);

			switch ($this->data['user_data']['role']) {
				case 0:
					// nothing to follow
					break;

				// set another case for each role, so that this page will validate where url belong

				default:
					# code...
					break;
			}
		}

	}

	public function dashboard(){

		$this->load->view('include/header');
		$this->load->view('admin/dashboard', $this->data);
		$this->load->view('include/footer');
	}


	public function mod_products(){

		$id_mp 	=	$_GET['post'];

		$this->data['prod_list_id'] = $this->AdminModel->prod_list_id($id_mp);



		$this->data['awt'] 	=	$this->AdminModel->mp($id_mp);



		$data['last_id'] = $this->db->insert_id();
		$this->load->view('include/header');
		$this->load->view('admin/mod_products', $this->data);
		$this->load->view('include/footer');
	}

		


	public function updatempqty(){
	$qty 		= 	$this->input->post('m_qty');
		$mid		=	$this->input->post('m_id');
	

		$array = array();
		foreach($qty as $key => $value) {

				  $array [$mid[$key]] = $qty[$key];
			}
				 $result = $this->AdminModel->updatempqty($array);
	}



	public function purchase_prod(){
		$p_id 		=	$this->input->post('p_id');
		$get_id 		=	$this->input->post('get_id');
		$qty 		=	$this->input->post('qty');
		$qty_prod 	=	$this->input->post('qty_prod');


			$array = array();
		foreach($p_id as $key => $value) {
				  $array [$qty[$key]] = $p_id[$key];
			}
		echo '<pre>'. print_r($array). '</pre>';
			
		$result 	=	$this->AdminModel->purchase_prod($array,$qty_prod);

	}


	public function product(){

		$this->data['prod_list'] = $this->AdminModel->prod_list();
		$this->data['mat_list'] 	=	$this->AdminModel->materials_fetch();
		$data['last_id'] = $this->db->insert_id();
		$this->load->view('include/header');
		$this->load->view('admin/product', $this->data);
		$this->load->view('include/footer');
	}

	public function materials(){

		$this->data['mat_list'] = $this->AdminModel->mat_list();
		$data['last_id'] = $this->db->insert_id();
		$this->load->view('include/header');
		$this->load->view('admin/materials', $this->data);
		$this->load->view('include/footer');
	}

	public function purchase(){
		$p_id 	=	$_GET['pur_id'];

		$this->data['purchase_fetch'] 	=	$this->AdminModel->purchase_fetch($p_id);
		$this->data['mat_list'] = $this->AdminModel->mat_list();

		$this->data['awt'] 	=	$this->AdminModel->mp($p_id);
		$this->data['mp_fetch_row'] 	=	$this->AdminModel->mp_fetch($p_id);


		$data['last_id'] = $this->db->insert_id();
		$this->load->view('include/header');
		$this->load->view('admin/purchase', $this->data);
		$this->load->view('include/footer');
	}



	
	public function inser_materials(){

		$material 	=	$this->input->post('material');
		$qty 		=	$this->input->post('qty');

		$data 	=	array(
			'name' 	=>	$this->input->post('material'),
			'qty' 	=>	$this->input->post('qty')
		);
		$result 	=	$this->AdminModel->inser_materials($data);

		$c_id 		=	$this->db->insert_id();

		$data2 		=	array(
			'm_id' 	=>	$c_id,
			'qty'		=>	$this->input->post('qty')
		);

		$result2 	=	$this->AdminModel->insert_mar_re($data2);
		redirect('materials');

	}



	public function insert_prod(){

		$data_name =	$this->input->post('m_id');
   	 $cid = $this->db->insert_id();
		$data = array( 
			'brand' 		=>	$this->input->post('brand'),
			'category' 		=>	$this->input->post('category'),
			'color' 		=>	$this->input->post('color'),
			'liter' 		=>	$this->input->post('liter'),
			'qty' 		=>	$this->input->post('qty'),
			'month' 	=> date('F'),
			'year'		=> date('Y')
		);
		$result 	=	$this->AdminModel->insert_prod($data);
   	 	$cid = $this->db->insert_id();

		$i = 0;
		foreach ($data_name as $youadi) {

			$insert_p_mat = array(

				'p_id' 	=> $cid,
				'm_id'	=> $youadi
			);
  			$result5 	= $this->db->insert(' m_p_tbl', $insert_p_mat);
		}

			redirect('mod_products?post='.$cid);
		}
	

	
}