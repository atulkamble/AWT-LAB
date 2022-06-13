<?php
session_start();
$_SESSION['username']= 'Rahul';
$_SESSION['authuser']= 1;
?>
<html>
<head><title></title>
</head>
<body>
<?php
$my = urlencode('MIT');
echo "<a href=\"session2.php?name=$my\">";
echo 'click here to see my college name';
echo '</a>'
?>
</body>
</html>