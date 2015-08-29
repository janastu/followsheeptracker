<?php
include_once("header.php");
header("Content-Type: text/html");
if(isset($_FILES["zip_file"])) {
	$filename = $_FILES["zip_file"]["name"];
	$source = $_FILES["zip_file"]["tmp_name"];
	$type = $_FILES["zip_file"]["type"];
         	
	$name = explode(".", $filename);
 $target = '/var/www/html/bgpx/uploads/' . $name[0] . '-' . time() . '/';  
        
	$accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
	foreach($accepted_types as $mime_type) {
		if($mime_type == $type) {
			$okay = true;
			break;
		} 
	}
	
	$continue = strtolower($name[1]) == 'zip' ? true : false;
	if(!$continue) {
		echo 'The file you are trying to upload is not a .zip file. Please try again.';
	}

	mkdir($target,0777,true);
        $target_path = $target . $filename;

	if(move_uploaded_file($source, $target_path)) {
		$zip = new ZipArchive();
		$x = $zip->open($target_path);
		if ($x === true) {
		     	$zip->extractTo($target); // change this to the correct site path
			$zip->close();
	
			unlink($target_path);
		}
		echo 'Your zip file was uploaded and unpacked.';
	} else {	
		echo 'There was a problem with the upload. Please try again.';
	}


			$scan = scandir($target . $name[0]);

			print '<ul';
			for ($i=0; $i<count($scan); $i++)
			{
				echo '<li>' . $scan[$i] . '</li>';
			}
			print '</ul>';

}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>BaaServer</title>
</head>

<body>
<?php if($message) echo "<p>$message</p>"; ?>
<form enctype="multipart/form-data" method="post" action="">
<label>Choose a zip file to upload: <input type="file" name="zip_file" /></label>
<br />
<input type="submit" name="submit" value="Upload" />
</form>
</body>
</html>
