<?php
	if(isset($_REQUEST["s_submit"])){
		$id=$_REQUEST["s_id"];
		$password=$_REQUEST["s_pswd"];
echo 'code done';
		$conn=mysqli_connect("localhost","root","") or die("couldn't connect");
echo 'connect success';	
	$db=mysqli_select_db($conn,"educatlog") or die(mysql_error());
echo 'connect success';	
		$q="select * from s_login where s_id=".$id." and s_pswd=".$password;
		$res=mysqli_query($conn,$q) or die(mysql_error());
		if(mysqli_num_rows($res)>0){
			setcookie("name",$id);
			header('Location:s_welcome.php');
		}
		else{
			header('Location:error.html');
		}
	}
	
	if(isset($_REQUEST["f_submit"])){
		$id=$_REQUEST["f_id"];
		$password=$_REQUEST["f_pswd"];
		$conn=mysqli_connect("localhost","root","") or die("couldn't connect");
		$db=mysqli_select_db($conn,"educatlog") or die(mysql_error());
		$q="select * from f_login where f_id='".$id."' and f_pswd='".$password."'";
		$res=mysqli_query($conn,$q) or die(mysql_error());
		if(mysqli_num_rows($res)>0){
			setcookie("name",$id);
			header('Location:f_welcome.php');
		}
		else{
			header('Location:error.html');
		}
	}
	
	if(isset($_REQUEST["a_submit"])){
		$id=$_REQUEST["a_id"];
		$password=$_REQUEST["a_pswd"];
		$conn=mysqli_connect("localhost","root","") or die("couldn't connect");
		$db=mysqli_select_db($conn,"educatlog") or die(mysql_error());
		$q="select * from a_login where a_id='".$id."' and a_pswd='".$password."'";
		$res=mysqli_query($conn,$q) or die(mysql_error());
		if(mysqli_num_rows($res)>0){
			setcookie("name",$id);
			header('Location:a_welcome.php');
		}
		else{
			header('Location:error.html');
		}
	}
?>