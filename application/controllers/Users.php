<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function show_user()
	{
		$user_id = $this->uri->segment(3);
		$this->load->model('users_m');
		$user_q = $this->users_m->get_user_by_id($user_id);
		
		$content = '';
		if($user_q->num_rows()){
			$user = $user_q->row();
			$content .= "name : " . $user->name . "</br>";
			$content .= "phone : " . $user->phone . "</br>";
			$content .= "log in name : " . $user->login_name . "</br>";
			$content .= "password : " . $user->password . "</br>";
			$content .= "statue : " . (($user->active) ? "active" : "not active") . "</br>";
		}else{
			$content .= "user is not found";
		}

		$arr['content'] = $content;
		$this->load->view('page', $arr);
	}

	public function test_template(){
		$arr['content'] = 'content 1';
		$this->load->view('page', $arr);
	}

	public function index(){
		$this->load->library('pagination');
		$this->load->model('users_m');

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
}
