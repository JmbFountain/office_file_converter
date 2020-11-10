<?php
//retrieve URL from POST-Request
$url = $_POST['URL'];
print $url;
$inFile = "temp/"+basename($url);
file_put_contents($inFile,file_get_contents($url));
$inFileType = null;
switch ($variable) {
    case preg_match('doc$', $inFile) == true:
        exec("libreoffice --headless --convert-to docx $infile --outdir ./output");
        break;
    
    default:
        # code...
        break;
}


?>