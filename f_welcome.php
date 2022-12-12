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
  <li><a class="active" href="#home">
  <?php
if(isset($_COOKIE['name']))
echo "Welcome ".$_COOKIE['name'];
?>
  </a></li>
<li><a href="teachupload.php">Upload</a></li>
  <li><a href="index.html">Logout</a></li>
</ul>

<div style="margin-left:20%;padding:1px 16px;height:1000px;">
  <h2>Home</h2>
  <h3>This page contains your personal details.</h3>
  <p>Nameee</p>
  <p>course</p>
  <p>class</p>
  <p>sec</p>
  <p>year</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
</div>

</body>
</html>


