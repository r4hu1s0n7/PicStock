<form name="logo" action="#" method="post">
    <input type="hidden" name="lgpath" value="abstract-abstraction-background-1044989.5ca3b4790e0a98.17396494.jpg">
    <img src="uploads/abstract-abstraction-background-1044989.5ca3b4790e0a98.17396494.jpg">               
    <div><input type="submit" name="dwnlg" id="dwnlg"></div></div>
</form>
<?php 
    if($_POST['dwnlg'])
    {
        $LgPath=$_POST['lgpath'];
        header("Content-type: image/jpeg");  
        header('Content-Disposition: attachment; filename="'.$LgPath.'"');  
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header("Cache-Control: public");
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($LgPath));
        readfile($LgPath);  
     }
?>  