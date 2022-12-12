<html>
<head><title>Student Welcome</title>

<style>
    .maindiv{
        display: flex;
        border: 1px solid black;
        padding:4px;
        width:fit-content;
    }
    .text, .video {
        border: 1px solid black;
        padding: 4px;
        margin: 4px;
    }
    .title {
        padding:4px;
        boder:1px solid black;
        font-weight:bold;
    }
    .logout {
        display:flex;
        justify-content: end;
        font-size:20px;
    }
</style>

</head>
<body>
<?php
if(isset($_COOKIE['name']))
echo "<h2><center>Welcome ".$_COOKIE['name']."</center></h2><br>";
?>

<div class="logout">
<a href="index.html">Logout</a>
</div>


<div class="maindiv">

<div>
    <div class="title">Transcripts</div>
    <?php 
    
    
$fileList = glob('transcripts/*');
foreach($fileList as $filename){
    if(is_file($filename)){
        if(str_contains($filename,".srt")){
            
        }
        else {
            echo "<div class='text'><a href='http://localhost/miniproject/pyTranscriber-1.3-stable/download.php?filename=$filename'>$filename</a></div>";
        }
    }   
}
    
    ?>
</div>

<div>
<div class="title">Videos</div>
<?php



$fileList = glob('videos/*');
foreach($fileList as $filename){
    if(is_file($filename)){
        echo "<div class='video'><a href='http://localhost/miniproject/pyTranscriber-1.3-stable/downloadvideo.php?filename=$filename'>$filename</a></div>";
    }   
}
?>


</div>

</div>

  
</body>
</html>