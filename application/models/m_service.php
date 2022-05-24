<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_service extends CI_Model
{

	function m_show_data()
	{
		$data = $this->db->get('register_user');
		return $data->result_array();
	}

	// login account name 
	function login_name()
	{
		$user = $this->ion_auth->user()->row();
		$user =  $user->first_name;
		return $user;
	}

	function insert_data($table, $data)
	{
		$this->db->insert($table, $data);
	}

	// select all data 
	function all_data_select($table)
	{


		$this->db->order_by('id_post', 'DESC');
		$data = $this->db->get($table);

		return $data->result_array();
	}

	// select data by id 
	function Select_by_id($table, $slug)
	{


		$this->db->where('post_slug', $slug);
		$data = $this->db->get($table);
		$data = $data->result_array();

		if ($data == null) {
			redirect('main');
		} else {
			return $data;
		}

		// print_r($data);
		// print_r($data->result_array());
	}

	//main page models 

	// pagination open
	function data_thumnail($number, $offset)
	{
		$this->db->order_by('id_paket_trip', 'desc');
		return $this->db->get('paket_trip', $number, $offset)->result_array();
	}

	function jumlah_data()
	{
		return $this->db->get('paket_trip')->num_rows();
	}



	// pagination close

	function get_paket_detail($id)
	{
		$this->db->where('id_paket_trip', $id);
		$query = $this->db->get('paket_trip')->result_array();
		return $query;
	}


	// service controller model 
	function check_agensi($user_id)
	{
		$this->db->query("select user_id from agen_trip where user_id=$user_id");
	}

	function use_agensi($user_id)
	{
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('agen_trip')->result_array();
		return  $query;
	}

	function list_paket_trip($user_id)
	{

		$this->db->where('user_id', $user_id);
		$this->db->order_by('id_paket_trip', 'DESC');
		$query = $this->db->get('paket_trip')->result_array();

		return $query;

		// $data =  $this->db->query("select * from paket_trip where user_id=$user_id");
		// print_r($data);
	}

	function url_reader()
	{
		if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
			$url = "https://";
		else
			$url = "http://";
		// Append the host(domain name, ip) to the URL.   
		$url .= $_SERVER['HTTP_HOST'];

		// Append the requested resource location to the URL   
		$url .= $_SERVER['REQUEST_URI'];

		return $url;
	}


	// controller costumer 
	function costumer_booking_code($user_id)
	{
		$this->db->where('id_costumer', $user_id);
		$query = $this->db->get('booking_trip')->result_array();
		return $query;
		print_r($query);
	}
}
