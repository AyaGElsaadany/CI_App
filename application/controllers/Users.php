<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('users_m');
	}

	public function show_user()
	{
		$user_id = $this->uri->segment(3);
		$user_q = $this->users_m->get_user_by_id($user_id);
		
		$view['user_q'] = $user_q;
		$content = $this->load->view('body/show_user', $view, true);
		
		$arr['content'] = $content;
		$this->load->view('page', $arr);
	}

	public function test_template(){
		$arr['content'] = 'content 1';
		$this->load->view('page', $arr);
	}

	public function index(){
		$this->load->library('pagination');

		$config['base_url'] = 'http://localhost/ci-app/index.php/users/index/';
		$config['total_rows'] = $this->users_m->get_num();

		$this->pagination->initialize($config);

		$page = $this->uri->segment(3);
		if($page != 0) $page = $page * 10 - 10;

		$this->load->model('users_m');
		$user_q = $this->users_m->get_all($page);

		$view['users'] = $user_q->result();
		$content = $this->load->view('body/index', $view, true);
		
		$arr['content'] = $content;
		$this->load->view('page', $arr);
	}

	public function edit(){
		$user_id = $this->uri->segment(3);
		$view['msg'] = '';

		if($this->input->post('submit')){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'name', 'required');
			$this->form_validation->set_rules('login_name', 'login name', 'required');
			$this->form_validation->set_rules('phone', 'phone', 'required|numeric');

			if($this->form_validation->run()){
				$user['name'] = $this->input->post('name');
				$user['phone'] = $this->input->post('phone');
				$user['login_name'] = $this->input->post('login_name');
				$user['active'] = $this->input->post('active');
			
				$this->users_m->update($user_id, $user);
				$view['msg'] = 'updated successfully';
			} else {
				$view['msg'] = 'can\'t update due to : ' . validation_errors(); 
			}
		}

		$user_q = $this->users_m->get_user_by_id($user_id);
		
		$view['user_q'] = $user_q;
		$content = $this->load->view('body/edit', $view, true);
		
		$arr['content'] = $content;
		$this->load->view('page', $arr);
	}

}
