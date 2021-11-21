<?php

	$config['per_page'] = 10;

	$config['uri_segment'] = 3;
	$config['display_pages'] = TRUE;
	$config['attributes'] = array('class' => 'myclass');

	$config['num_links'] = 1;
	$config['use_page_numbers'] = TRUE;

	$config['full_tag_open'] = '<nav class="Page navigation"> <ul class="pagination">';
	$config['full_tag_close'] = '</ul> </nav>';

	$config['first_link'] = '<<';
	$config['first_tag_open'] = '<li class="page-item"> <a class="page-link" href="#">';
	$config['first_tag_close'] = '</a> </li>';

	$config['last_link'] = '>>';
	$config['last_tag_open'] = '<li class="page-item"> <a class="page-link" href="#">';
	$config['last_tag_close'] = '</a> </li>';

	$config['next_link'] = '&gt;';
	$config['next_tag_open'] = '<li class="page-item"> <a class="page-link" href="#">';
	$config['next_tag_close'] = '</a> </li>';

	$config['prev_link'] = '&lt;';
	$config['prev_tag_open'] = '<li class="page-item"> <a class="page-link" href="#">';
	$config['prev_tag_close'] = '</a> </li>';

	$config['cur_tag_open'] = '<li class="page-item"> <a class="page-link" href="#">';
	$config['cur_tag_close'] = '</a> </li>';

	$config['num_tag_open'] = '<li class="page-item"> <a class="page-link" href="#">';
	$config['num_tag_close'] = '</a> </li>';

?>
