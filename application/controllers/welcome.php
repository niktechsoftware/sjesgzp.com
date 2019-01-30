<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
			$data['body'] = "welcome_message";
			$this->load->view("include/mainContent",$data);
		}
		public function principalMsg()
		{
			$data['body'] = "principalMsg";
			$this->load->view("include/mainContent",$data);
		}
		public function chairmanMessage()
		{
			$data['body'] = "chairmanMessage";
			$this->load->view("include/mainContent",$data);
		}
		public function gallery()
		{
			$data['body'] = "gallery";
			$this->load->view("include/mainContent",$data);
		}
		public function admissionGuide()
		{
			$data['body'] = "admissionGuide";
			$this->load->view("include/mainContent",$data);
		}
		public function transportRule()
		{
			$data['body'] = "transportRule";
			$this->load->view("include/mainContent",$data);
		}
		public function contact()
		{
			$data['body'] = "contact";
			$this->load->view("include/mainContent",$data);
		}
		public function calender()
		{
			$data['body'] = "schoolCalender";
			$this->load->view("include/mainContent2",$data);
		}
		
		
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */