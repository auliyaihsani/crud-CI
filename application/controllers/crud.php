<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	// list update
	public function index()
	{
		$data['content'] = $this->db->get('identitas');
		$this->load->view('crud/index', $data);
	}

	// add new item
	public function add()
	{
		$this->load->view('crud/add');
	}
	public function action_add()
	{
		$data = array(
		'nama'=>$this->input->post('nama'),
		'status'=>$this->input->post('status'), 
		'jurusan'=>$this->input->post('jurusan')  
		);
		$this->db->insert('identitas', $data);	
		redirect('crud','refresh');
		
	}
	// update item
	public function update( $id = NULL)
	{
		// mengupdate sesuai id
		$this->db->where('id', $id);
		$data['content'] = $this->db->get('identitas');
		$this->load->view('crud/update', $data);
	}


		public function action_update( $id = '')
		{
			$data = array(
			'nama'=>$this->input->post('nama'),
			'status'=>$this->input->post('status'), 
			'jurusan'=>$this->input->post('jurusan')  
			);

			$this->db->where('id', $id);
			$this->db->update('identitas', $data);	
			redirect('crud','refresh');
			
		}


	// delete item
	public function delete( $id = NULL)
	{
		$this->db->where('id', $id);
		$this->db->delete('identitas');

		
		redirect('crud','refresh');
		
	}

}

/* End of file crud.php */
/* Location: ./application/controllers/crud.php */