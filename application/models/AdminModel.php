<?php

class AdminModel extends CI_Model{


	public function prod_list(){

		$this->db->select('*');
		$this->db->from('products_tbl');
		$query = $this->db->get();
		return $result = $query->result();
	}

	public function prod_list_id($id_mp){

		$this->db->select('*');
		$this->db->from('products_tbl');
		$this->db->where('p_id', $id_mp);
		$query = $this->db->get();
		return $result = $query->row();
	}


	public function mp($id_mp){

		$this->db->select('*');
		$this->db->from('m_p_tbl');
		$this->db->join('materials', 'materials.m_id = m_p_tbl.m_id','left');
		$this->db->where('p_id', $id_mp);
		$query = $this->db->get();
		return $result = $query->result();
	}


	public function updatempqty($array = ''){


		foreach ($array as $id => $qty ) {
			 $this->db->set('qty', $qty);
			 $this->db->where('mp_id', $id);
       		$result =  $this->db->update('m_p_tbl');
		}

       

	}

	public function mp_fetch($p_id){
		$this->db->select('*');
		$this->db->from('m_p_tbl');
		$this->db->where('p_id', $p_id);
		$query = $this->db->get();
		return $result = $query->result();
	}


	public function purchase_prod($array,$qty_prod){

		foreach ($array as $qty => $id){

			$this->db->where([
			'm_id' => $id,
			'qty >=' => $qty_prod
			]);
					
			$this->db->set('qty', 'qty-'. $qty.'',false);
					
			 $result =  $this->db->update('materials');
		   






		}
	}











	public function purchase_fetch($p_id){

		$this->db->select('*');
		$this->db->from('products_tbl');
		$this->db->where('p_id', $p_id);
		$query = $this->db->get();
		return $result = $query->row();
	}

	









	

	

	public function insert_prod($data){
		$this->db->insert('products_tbl', $data);
		$insert_id = $this->db->insert_id();

		return  $insert_id;
	}

	public function purchase($p_id){
		$this->db->select('*');
		$this->db->from('products_tbl');
		$this->db->where('p_id', $p_id);
		$query = $this->db->get();
		return $result = $query->row();
	}


	public function update_pur($deducted,$p_id){
		$this->db->set('qty', $deducted);
		$this->db->where('p_id', $p_id);
		$this->db->update('products_tbl');
	}

	public function materials_fetch(){
		$this->db->select('*');
		$this->db->from('materials');
		$query 	=	$this->db->get();
		return $result = $query->result();
	}	

	public function update_matthin($dematerials){
		$this->db->set('qty', $deducted);
		$this->db->where('p_id', $p_id);
		$this->db->update('products_tbl');
	}
	public function mat_list(){
		$this->db->select('*');
		$this->db->from('materials');
		$query = $this->db->get();
		return $result = $query->result();
	}

	public function thinner($t_id){
		$this->db->select('*');
		$this->db->from('thinner');
		$query = $this->db->get();
		return $result = $query->row();
	}

	public function inser_materials($data){
		$this->db->insert('materials', $data);
		$get_insert_id = $this->db->insert_id();

		return $get_insert_id;
	}

	public function insert_mar_re($data){
		$this->db->insert('materials_report', $data);
	}


	

	
}