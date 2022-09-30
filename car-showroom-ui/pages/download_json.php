


<?php
if (isset($_REQUEST["api"])) {
    if (file_exists($_REQUEST["api"])) {
        $path = $_REQUEST["api"];
        $base = basename($path);
        header("Content-Description:File Transfer");
        header("Content-Type : application/octet-stream");
        header("Content-Disposition:attachment;filename=\"$base\"");
        header("Pragma:public");
        readfile($path);
        die();
    } else {
        echo "File not existed";
    }
}
?>