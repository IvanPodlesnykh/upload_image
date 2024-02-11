<?php
	if(!empty($_FILES['image'])) {
		echo var_dump($_FILES['image']);
		move_uploaded_file($_FILES['image']['tmp_name'], '*full path*/test/uploaded/'.$_FILES['image']['name']);
	}
?>