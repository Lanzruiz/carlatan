<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct() {

		parent::__construct();
		
		$this->load->model('book_model');
		$this->load->helper('url');
		$this->load->helper('date');
	}
	public function index()
	{
		$this->load->view('/frontend/index');
	}

	public function admin() {

	   $data['bookings'] = $this->book_model->all();
       $this->load->view('/dashboard/bookings', $data);

	} 

	public function send() {

		echo $this->input->post('car_brand');

        //$this->book_model->save();
		//redirect('application/login', 'refresh');
	} 
}
