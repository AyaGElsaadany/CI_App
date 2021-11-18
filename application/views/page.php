<?php

$this->load->view('header');
$arr['content'] = $content;
$this->load->view('content', $arr);
$this->load->view('footer');

?>
