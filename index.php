<?php
include_once("header.php");

if(!empty($_FILES['file'])) {
        $f_name = "";
				echo $f_name;
       
        if (!empty($_FILES["file"])) {
                if($_FILES["file"]["error"] == 0) {
                        $f_name = tempnam("api/0.6/gpx/create/","uploadzip");
                        unlink($f_name);
                        move_uploaded_file($_FILES["file"]["tmp_name"],$f_name.".gpx");
                        $f_name="api/0.6/gpx/create/".basename($f_name);
	echo $f_name;
                }
        }
}
        $echo .= "description\n" .$_POST['description'];
       $echo .= "file\n" .$_FILES['file'];
        $echo .= "tags\n" .$_POST['tags'];
				$finfo = finfo_open(FILEINFO_MIME_TYPE); 
        $filename = $_FILES['file'];
				$mime = finfo_file($finfo,dirname(__FILE__)."/".$f_name.$fileName); 
        $echo .= "mimetype" .$mime;
       $echo .= "filename\n" .$_FILES['FILE'];
        $echo .="====================================";   
			//	$echo = "post" .$_POST['description'];
        $file = fopen("/tmp/pass", "a");
				$res = print_r($echo, true);
				fwrite($file, "$res");
				fclose($file);

$echo = "\n";
?>



