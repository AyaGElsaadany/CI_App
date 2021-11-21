<?php

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

	echo $content;

?>
