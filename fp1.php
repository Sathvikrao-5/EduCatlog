<html>
<head><title>FileUpload</title></head>
<body>
<form action="fp1.php" method="post" enctype="multipart/form-data">

<input type="file" name="file" size="40" accept="video/*"/>


<br /><br />

<input type="submit" name="submit" value="Upload" />

<br /><br />

<span style="font-family: verdana; font-size: 12px;">* only mp3 files under 2 megabytes are allowed.</span>

</form>

<?php

if(isset($_REQUEST['submit'])) {
    if ($_FILES['file']['name'] != "") {
            #if (($_FILES['file']['type'] == "audio/mpeg") || ($_FILES['file']['type'] == "application/force-download")) {
                if ($_FILES["file"]["size"] < 8388608) {           
                        move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $_FILES["file"]["name"]);
                       echo "File has been stored in your uploads directory.";}
else {    echo "Please upload a file that is under 2 mb!";}
} else {
    echo "Please upload a mp3 file!";
    exit;}
} else {     echo "Please enter a file.";}
#}
?>

</body>
</html>