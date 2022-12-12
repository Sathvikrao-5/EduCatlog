<html>
<head><title>Admin Login</title></head>
</body>
<center>
<?php
if(isset($_COOKIE['name']))
echo "Welcome ".$_COOKIE['name'];
?>

<form method="post" action="a_welcome.php">
<h2>COURSES</h2><br>
Enter Course Name : &nbsp; &nbsp; <input type="text" name="cname" value=""/> <br><br>
Enter Course id   : &nbsp; &nbsp; <input type="text" name="cid" value=""/> <br><br>
Enter Faculity id   : &nbsp; &nbsp; <input type="text" name="fid" value=""/> <br><br>
<input type="submit" name="addC" value="ADD Course"/> &nbsp; &nbsp; 
<input type="submit" name="delC" value="Delete Course"/> <br>

<h2>CREATE USER</h2><br>
Enter Username : &nbsp; &nbsp; <input type="text" name="name" value=""/> <br><br>
Enter user id  : &nbsp; &nbsp; <input type="text" name="id" value=""/> <br><br>
Enter password : &nbsp; &nbsp; <input type="password" name="pswd" value=""/> <br><br>
Enter phone number   : &nbsp; &nbsp; <input type="text" name="phno" value=""/> <br><br>
Enter city   : &nbsp; &nbsp; <input type="text" name="city" value=""/> <br><br>
Note : If you want to create student then enter all the details and click on "ADD Student" button, incase of faculty click on "ADD Faculty" button<br>
If you want to delete a user enter the user id and click on Delete Student/Faculty respectively as per requirement.<br><br>
<input type="submit" name="addS" value="ADD Student"/> &nbsp; &nbsp; 
<input type="submit" name="delS" value="Delete Student"/> &nbsp; &nbsp; 

<input type="submit" name="addF" value="ADD Faculty"/> &nbsp; &nbsp; 
<input type="submit" name="delF" value="Delete Faculty"/> <br>
</form>

<?php

$conn=mysqli_connect("localhost","root","") or die("couldn't connect");
$db=mysqli_select_db($conn,"educatlog") or die(mysql_error());

if(isset($_REQUEST['addC'])){
	$cname=$_REQUEST['cname'];
	$cid=$_REQUEST['cid'];
	$fid=$_REQUEST['fid'];
	//$q1="select * from course where c_id='".$cid."'";
	//$res1=mysql_query($q1,$conn) or die(mysql_error());
	/*if(mysql_num_rows($res1)==1){
		
		echo "Couse id already exists";
	}*/
	//else{
		$q="insert into course values('".$cid."','".$cname."','.$fid.')";
		$res=mysqli_query($conn,$q) or die(mysql_error());
		
	//}
}

if(isset($_REQUEST['delC'])){

	$cid=$_REQUEST['cid'];
	$q="delete from course where c_id='".$cid."'";
	$res=mysqli_query($conn,$q) or die(mysql_error());
	if($res){
		echo "Course deleted sucessfully";
	}
}

if(isset($_REQUEST['addS'])){
	$sname=$_REQUEST['name'];
	$sid=$_REQUEST['id'];
	$pass=$_REQUEST['pswd'];
	$phno=$_REQUEST['phno'];
	$city=$_REQUEST['city'];
	$q="insert into s_login values('".$sname."','".$sid."','".$pass."','".$phno."','".$city."')";
	$res=mysqli_query($conn,$q) or die(mysql_error());

}

if(isset($_REQUEST['delS'])){
	
	$sid=$_REQUEST['id'];
	$q="delete from s_login where s_id='".$sid."'";
	$res=mysqli_query($conn,$q) or die(mysql_error());
	if($res){
		echo "Student deleted sucessfully";
	}
}


if(isset($_REQUEST['addF'])){
	$fname=$_REQUEST['name'];
	$fid=$_REQUEST['id'];
	$pass=$_REQUEST['pswd'];
	$phno=$_REQUEST['phno'];
	$city=$_REQUEST['city'];
	$q="insert into f_login values('".$fname."','".$fid."','".$pass."','".$phno."','','".$city."')";
	$res=mysqli_query($conn,$q) or die(mysql_error());
	
}

if(isset($_REQUEST['delF'])){
	
	$fid=$_REQUEST['id'];
	$q="delete from f_login where f_id='".$fid."'";
	$res=mysqli_query($conn,$q)or die(mysql_error());
	if($res){
		echo "Faculty deleted sucessfully";
	}
}
?>
</center>
<a style="float:right" href="index.html"> LOGUT</a>
</body>
</html>