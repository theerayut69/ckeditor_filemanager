<?php

//echo $_SERVER['HTTP_HOST'];

//print_r($config);

//$basepath = realpath(dirname(__FILE__) . '/../..');
$basepath = realpath(dirname(__FILE__));
define("BASEPATH", $basepath);


//echo BASEPATH;
echo dirname(__FILE__);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>A Simple Page with CKEditor</title>
    <!-- Make sure the path to CKEditor is correct. -->
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
<form>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' ,{
            filebrowserBrowseUrl : 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserUploadUrl : 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserImageBrowseUrl : 'filemanager/dialog.php?type=1&editor=ckeditor&fldr='
        });
    </script>
</form>
</body>
</html>