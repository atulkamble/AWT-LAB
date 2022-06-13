<?php
session_start();
if($_SESSION['authuser']!= 1)
{
echo 'sorry but don\'t have permission to view this page!';
exit();
}
?>
<html>
<head><title></title>
</head>
<body>
<?php
echo 'Welcome to MIT ';
echo $_SESSION['username'];
echo '!<br>';
echo 'My college is ';
echo $_GET['name'];
echo '!<br>';
$loca = 'Pune';
echo 'My college lacation is ';
echo $loca;
echo '</a>'
?>
</body>
</html>