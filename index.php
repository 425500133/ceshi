<?php
	if($_POST){
		$info = array(
			'name' => $_POST["name"],
			'age' => $_POST["age"]
		);
	}else{
		$info = "";
	}
	if($info !=""){
		echo json_encode($info);
	}else{
		echo "Hello World!";
	}
?>