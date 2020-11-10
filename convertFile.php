<?php
//retrieve URL from POST-Request
$url = 'http://localhost/test_word_doc.doc';
#$url = $_POST['URL'];
print $url."\n";
$inFile = "temp/".basename($url)."\n";
print $inFile;

file_put_contents($inFile,file_get_contents($url));

switch ($inFile) {
    case preg_match('/doc$/', $inFile) == true:
        print "doc";
        #exec("soffice --headless --convert-to docx $inFile --outdir output/");
        break;
    case preg_match('/xls$/', $inFile) == true:
        print "xls";
        #exec("soffice --headless --convert-to xlsx $inFile --outdir output/");
        break;
    case preg_match('/ppt$/', $inFile) == true:
        print "ppt";
        #exec("soffice --headless --convert-to pptx $inFile --outdir output/");
        break;
    case preg_match('/docm$/', $inFile) == true:
        
        #exec("soffice --headless --convert-to docx $inFile --outdir output/");
        break;
    case preg_match('/xlsm$/', $inFile) == true:
        #exec("soffice --headless --convert-to pptx $inFile --outdir output/");
        break;
    case preg_match('/docm$/', $inFile) == true:
        #exec("soffice --headless --convert-to pptx $inFile --outdir output/");
        break;
        
    default:
        print "not a valid file";
        break;
}

die
?>