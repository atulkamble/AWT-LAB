<!DOCTYPE html>
<html>
<body>
<?php
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "mit", $str);
?>
</body>
</html>

