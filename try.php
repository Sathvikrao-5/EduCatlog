<?PHP
    
        // ini_set('max_execution_time',0);
        // shell_exec('notepad');
        // // echo $output;
        $command_exec = escapeshellcmd('C:/xampp/htdocs/miniproject/pyTranscriber-1.3-stable/main.py');
        $str_output = shell_exec($command_exec);
        // echo $str_output;
        echo 'The video has been uploaded and transcribed. The transcription of the video can be accessed by the student, through the portal. Thank you.<br><br><center><a href="teachupload.php">Back to faculty page</a></center>'
	
?>