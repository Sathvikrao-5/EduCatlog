<?php
if(isset($_REQUEST['cap'])){
	$command_exec = escapeshellcmd('C:\xampp\htdocs\miniproject\pyTranscriber-1.3-stable\caps.py');
	$str_output = shell_exec($command_exec);
	echo 'The video has been uploaded and transcribed. The transcription of the video can be accessed by the student, through the portal. Thank you.<br><br><center><a href="index.html">GO TO LOGIN PAGE</a></center>';
	}
	
?>