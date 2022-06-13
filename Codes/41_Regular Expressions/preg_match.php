<!DOCTYPE html>
<html>
<body>
<?php
$str = "Visit mit";
$pattern = "/mit/i";
echo preg_match($pattern, $str); 
?>
</body>
</html>