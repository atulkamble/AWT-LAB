<!DOCTYPE html>
<html>
    <center>
<head>
    <title>
        IPL Winners
    </title>
    <style>
        body  {
              background-color: burlywood;
              }
    </style>
</head>
<body>
<h1>IPL Winners List</h1>
<h2>as per Team</h2>
    <?php
    $ipl = array("CSK"=>"2021", "MI"=>"2020", "SRH"=>"2016");
    echo "CSK won IPL in year" . $ipl['CSK'] . ".";
    echo nl2br("\n");  
    echo "MI won IPL in year" . $ipl['MI'] . ".";
    echo nl2br("\n");  
    echo "SRH won IPL in year" . $ipl['SRH'] . ".";
    ?>
</body>
</center>
</html>