<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('/frontend/header');
		$this->load->view('/frontend/home');
		$this->load->view('/frontend/footer');
	}
	public function ourlegacy()
	{
		$this->load->view('/frontend/header');
		$this->load->view('/frontend/aboutus');
		$this->load->view('/frontend/footer');
	}
	public function valueproposition()
	{
		$this->load->view('/frontend/header');
		$this->load->view('/frontend/whyus');
		$this->load->view('/frontend/footer');
	}
	public function clients()
	{
		$this->load->view('/frontend/header');
		$this->load->view('/frontend/clients');
		$this->load->view('/frontend/footer');
	}
	public function gallery()
	{
		$this->load->view('/frontend/header');
		$this->load->view('/frontend/gallery');
		$this->load->view('/frontend/footer');
	}
	public function contact()
	{
		$this->load->view('/frontend/header');
		$this->load->view('/frontend/contact');
		$this->load->view('/frontend/footer');
	}
	public function news()
	{
		$this->load->view('/frontend/header');
		$this->load->view('/frontend/news');
		$this->load->view('/frontend/footer');
	}
	public function blogs()
	{
		$this->load->view('/frontend/header');
		$this->load->view('/frontend/blogs');
		$this->load->view('/frontend/footer');
	}
	public function blogpost($url = null)
	{
		$this->load->view('/frontend/header');
		// $this->load->view('/frontend/blogpost');
		if (!empty($url)) {
			$data['id'] = $url;
			$this->load->view('/frontend/blogpost', $data);
		} else {
			// $this->load->view('/frontend/newspost');
		}
		$this->load->view('/frontend/footer');
	}
	public function newspost($url = null)
	{
		$this->load->view('/frontend/header');
		if (!empty($url)) {
			$data['id'] = $url;
			$this->load->view('/frontend/newspost', $data);
		} else {
			// $this->load->view('/frontend/newspost');
		}
		$this->load->view('/frontend/footer');
	}
	public function location()
	{
		$this->load->view('/frontend/header');
		$this->load->view('/frontend/location');
		$this->load->view('/frontend/footer');
	}
	public function viewplan($url = null)
	{
		if (!empty($url)) {
			$data['imageUrl'] = $url;
			$this->load->view('/frontend/veiwplan', $data);
		}
	}
	// MAIL FUNCTION

	public function send_mail()
	{
		$data = array(
			'user_name' => $this->input->post('username'),
			'user_email_id' => $this->input->post('email'),
			'user_phone' => $this->input->post('phone'),
			'user_comments' => $this->input->post('comment'),
		);
		$config = array(
			'mailtype' => 'html',
			'protocol' => 'sendmail'
		);
		$this->email->initialize($config);
		$from = "no-reply@greenbase.com";
		$to = 'beakmedia@gmail.com';
		$subject = 'Enquiry Mail';
		$message = "Name: " . $data['user_name'] . "<br>" . "Email: " . $data['user_email_id'] . "<br>" . "Phone Number: " . $data['user_phone'] . "<br>" . "Comments: " . $data['user_comments'];
		$this->email->from($from, $data['user_name']);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);

		if (@$this->email->send()) {
			// $this->load->view('/frontend/contact');
			redirect('/', 'refresh');
		} else {
			show_error($this->email->print_debugger());
		}
	}
}
