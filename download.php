<?php
    require_once 'excel.php';
    require_once 'BuildingClass.php';
    session_start();
    $file = $_SESSION['name'];
    $arr =  $_SESSION['array'];
    
    function file_force_download($file) {
      if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($file).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        //exit;
        echo('<script type="text/javascript">
           window.close();
            </script>');
        }
    }
     getExcel('Blablabla', $arr);
    //file_force_download($file);
?>