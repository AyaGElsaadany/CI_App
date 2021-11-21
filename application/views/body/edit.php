<?php
	echo $msg;

	if($user_q->num_rows()){
		$user = $user_q->row();
		?>
		<?= form_open() ?>
		<label>Name : </label>
		<?= form_input('name', $user->name) ?>
		<br>
		<label>Login Name : </label>
		<?= form_input('login_name', $user->login_name) ?>
		<br>
		<label>Phone : </label>
		<?= form_input('phone', $user->phone) ?>
		<br>
		<label>Activation Status : </label>
		<?= form_dropdown('active', array(1 => 'active', 0 => 'not active'), $user->active) ?>
		<br>
		<?= form_submit('submit', 'Edit') ?>
		<?php
	}
?>
