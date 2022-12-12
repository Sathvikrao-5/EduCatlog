

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
<style>
body {
  margin: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 20%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color:skyblue;
  color: white;
}

li a:hover:not(.active) {
  background-color:powderblue;
  color: white;
}
</style>
</head>
<body>

<ul>
  <li><a href="teacher.html"><?php
if(isset($_COOKIE['name']))
echo "Welcome ".$_COOKIE['name'];
?></a></li>
<li><a class="active">Upload</a></li>
  <li><a href="index.html">Logout</a></li>
</ul>

<div style="margin-left:20%;padding:1px 16px;height:1000px;">
  <h2>Upload Class Video</h2>
  <h3>Please attach the class video below.</h3>
  <p>The video must be in English language.</p>
  <p>Internet must be connected to upload the video and to transcribe it.</p>

  <form action="try.php">
    <input type="submit" name='up' value="UPLOAD"/></form><br><br>
<!-- <form action="try1.php">
	Enter file name : &nbsp; &nbsp;
	<input type="text" name="inp" value=""/>
	<input type="submit" name='cap' value="CAPITALIZE"/>
    </form>
     -->


</body>
</html>


