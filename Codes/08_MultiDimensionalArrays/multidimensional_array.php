<!DOCTYPE html>
<html>
    <center>
    <head>
    <title>
        IPL Auction
    </title>
    <style>
        body  {
              background-color: slategray;
              }
    </style>
    </head>
<body>
<h1>IPL Auction</h1>
<h2>2022</h2>
<?php
$ipl = array (
  array("MI",25,0),
  array("CSK",23,2),
  array("SRH",21,4),
  array("RR",18,7)
);
  
echo $ipl[0][0].": Players In stock: ".$ipl[0][1].", Players sold: ".$ipl[0][2].".<br>";
echo $ipl[1][0].": Players In stock: ".$ipl[1][1].", Players sold: ".$ipl[1][2].".<br>";
echo $ipl[2][0].": Players In stock: ".$ipl[2][1].", Players sold: ".$ipl[2][2].".<br>";
echo $ipl[3][0].": Players In stock: ".$ipl[3][1].", Players sold: ".$ipl[3][2].".<br>";
?>

</body>
</center>
</html>