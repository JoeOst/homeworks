<?php 
	
	$validType = "image/jpeg";
	$path = 'upload_pictures/'; 
	$new_name = time().'.'."jpg"; 
	$full_path = $path.$new_name; 


	$fileType = $_FILES['userfile']['type'];
	$tmp_path = $_FILES['userfile']['tmp_name'];
	$fileName = $_FILES['userfile']['name'];

	if ($fileType != $validType) {
			echo("Invalid file type.");
			die;
	} 
   
	
	if($_FILES['userfile']['error'] == 0){
	    if(move_uploaded_file($tmp_path, $full_path)){
	        header("Location: index.php");
	    }
	    else echo "error";
}

?>
