<?php
if(isset($_POST['submit'])){
	$file=$_FILES['file'];
<<<<<<< HEAD
=======

>>>>>>> origin
	$filename=$_FILES['file']['name'];
	$fileTmpName=$_FILES['file']['tmp_name'];
	$fileSize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];
	$fileType=$_FILES['file']['type'];
<<<<<<< HEAD
=======

>>>>>>> origin
	$fileExt = explode('.', $filename);
	$fileActualExt=strtolower(end($fileExt));
	$allowed = array('jpg','jpeg','png');
	if(in_array($fileActualExt,$allowed)){
		if($fileError === 0){
			if($fileSize<1000000){
				//Passed cases
					$filenamenew = uniqid('',true).".".$fileActualExt;
					$fileDest='uploads/'.$filenamenew;
					move_uploaded_file($fileTmpName, $fileDest);
					header("Location: index.php?uploadsucess");
			}
			else{
				echo "Your file is too big!";
			}
		}
		else{
			echo "There was an error uploading your file!";
		}

	}
	else{
		echo "You cannot upload file of this type!";
	}
}
?>