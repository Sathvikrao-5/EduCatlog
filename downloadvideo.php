<?php  
// $file = $_GET['filename'];
// $file_url = 'C:\xampp\htdocs\miniproject\pyTranscriber-1.3-stable\\'.substr($file,7);  
// header('Content-Type: application/octet-stream');  
// header("Content-Transfer-Encoding: binary");   
// header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");   
// ob_clean();
// flush();
// readfile($file_url);  
?>  


<?php

if(isset($_GET['filename'])){
    $fileName=$_GET['filename'];
    $fileName = substr($fileName,7);
    $fileName=str_replace("..",".",$fileName); //required. if somebody is trying parent folder files
    $file = "C:/xampp/htdocs/miniproject/pyTranscriber-1.3-stable/videos/".$fileName; // you need to change the destination to your video folder
    echo $file;
    if (file_exists($file)) {
        $mime = 'application/force-download';

        header('Content-Type: '.$mime);

        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename='.$fileName);
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
        exit;
    }
}

?>
