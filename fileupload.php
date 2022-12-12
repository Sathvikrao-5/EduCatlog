<?php
if(isset($_POST['submit'])){ 
	$conn=mysql_connect("localhost","root","") or die("couldn't connect");
	$db=mysql_select_db("EduCatlog",$conn) or die(mysql_error());
	$filename= $_FILES['file']['name'];
	echo $filename;
	/*
	$tempname= $_FILES["file"]["tmp_name"];
	$folder= "videos/" . $filename;
	move_uploaded_file($tempname, $folder);
	$q="INSERT INTO video('name')VALUES('".$folder."')";
	if(!mysql_query($conn,$q)){
		echo "data not inserted";
	}
	else
		echo "data inserted"; */
}

?>

<form action="fileupload.php" enctype="multi/form-data" method="POST">
<input type="file" name="file" id="file"/>
<input type="submit" name="submit" value="submit"/>
</form>